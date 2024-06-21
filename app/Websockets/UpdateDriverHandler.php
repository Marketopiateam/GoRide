<?php

namespace App\Websockets;

use App\Events\MessageSent;
use stdClass;
use Exception;


use App\Models\User;
use Ratchet\ConnectionInterface;

use BeyondCode\LaravelWebSockets\Apps\App;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;
use BeyondCode\LaravelWebSockets\QueryParameters;
use BeyondCode\LaravelWebSockets\Facades\StatisticsLogger;

use BeyondCode\LaravelWebSockets\Dashboard\DashboardLogger;
use BeyondCode\LaravelWebSockets\WebSockets\Channels\ChannelManager;
use BeyondCode\LaravelWebSockets\WebSockets\Exceptions\UnknownAppKey;

// class UpdateDriverHandler extends BaseSocketHandler  implements MessageComponentInterface
class UpdateDriverHandler implements MessageComponentInterface
{


    // function onMessage(ConnectionInterface $from, MessageInterface $msg)
    // {

    //     $body = collect(json_decode($msg->getPayload(), true));
    //     // $body = collect(json_decode($msg->getPayload(), true));
    //     // $payload = $body->get('payload');
    //     // $id = $body->get('id');
    //     // $user =   User::find($id);
    //     // $user->update(['latitude' => $payload['lat'], 'longitude' => $payload['long']]);
    //     // dump($payload['lat'], $payload['long']);
    //     // dump($payload, $id, $body);
    //     // $post = Post::query()->findOrFail($id);
    //     // $repo = new PostRepository();
    //     // $updated = $repo->update($post, $payload);
    //     // $response = (new PostResource($updated))->toJson();

    //     $from->send(  $body );
    // }

    protected $subscribedConnections = [];
    protected $channelName;
    protected $channelManager;
    protected stdClass $payload;
    public function __construct(ChannelManager $channelManager)
    {
        $this->channelManager = $channelManager;
    }
    protected function verifyAppKey(ConnectionInterface $connection)
    {
        $appKey = QueryParameters::create($connection->httpRequest)->get('appKey');

        if (!$app = App::findByKey($appKey)) {
            throw new UnknownAppKey($appKey);
        }

        $connection->app = $app;

        return $this;
    }

    protected function generateSocketId(ConnectionInterface $connection)
    {
        $socketId = sprintf('%d.%d', random_int(1, 1000000000), random_int(1, 1000000000));

        $connection->socketId = $socketId;

        return $this;
    }
    public function onOpen(ConnectionInterface $connection)
    {
        $this->verifyAppKey($connection)->generateSocketId($connection)->establishConnection($connection);

        DashboardLogger::connection($connection);
    }

    public function onClose(ConnectionInterface $conn)
    {

        $this->channelManager->removeFromAllChannels($conn);
        DashboardLogger::disconnection($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $conn->close();
    }
    function onMessage(ConnectionInterface $connection, MessageInterface $msg)
    {
        $body = collect(json_decode($msg->getPayload(), true));

        // Example: Subscribing to a channel

        if ($body->get('action') === 'subscribe') {
            $channel = $body->get('channel');
            $this->channelName = $channel;
            $channel = $this->channelManager->findOrCreate($connection->app->id, $this->channelName);
            $channel->subscribe($connection,  (object)['channel' => $this->channelName]);
        }

        // Example: Handling a message to be sent to a channel
        if ($body->get('action') === 'sendmessage') {
            $channel = $body->get('channel');
            $message = $body->get('message');
            try {
                event(new MessageSent($message));
            } catch (\Exception $e) {
                // Handle or log the exception
                $connection->send(json_encode(['status' => 'error', 'message' => $e->getMessage()]));
            }
        }

        // Example: Update user's location
        if ($body->get('action') === 'updateLocation') {
            $payload = $body->get('payload');
            $id = $body->get('id');
            $user = User::find($id);
            if ($user) {
                $user->update(['latitude' => $payload['lat'], 'longitude' => $payload['long']]);
                $connection->send(json_encode(['status' => 'location_updated', 'user' => $user]));
            } else {
                $connection->send(json_encode(['status' => 'user_not_found']));
            }
        }
    }
    public function subscribe(ConnectionInterface $connection)
    {
        $this->saveConnection($connection);

        $connection->send(json_encode([
            'event' => 'subscription_succeeded',
            'channel' => $this->channelName,
        ]));
    }
    public function hasConnections(): bool
    {
        return count($this->subscribedConnections) > 0;
    }

    protected function saveConnection(ConnectionInterface $connection)
    {
        $hadConnectionsPreviously = $this->hasConnections();

        $this->subscribedConnections[$connection->socketId] = $connection;

        if (!$hadConnectionsPreviously) {
            DashboardLogger::occupied($connection, $this->channelName);
        }

        DashboardLogger::subscribed($connection, $this->channelName);
    }
    public function broadcast($payload)
    {;
        foreach ($this->subscribedConnections as $connection) {
            $connection->send(json_encode($payload));
        }
    }
    public function broadcastToOthers(ConnectionInterface $connection, $payload)
    {
        $this->broadcastToEveryoneExcept($payload, $connection->socketId);
    }

    public function broadcastToEveryoneExcept($payload, ?string $socketId = null)
    {
        if (is_null($socketId)) {
            return $this->broadcast($payload);
        }

        foreach ($this->subscribedConnections as $connection) {
            if ($connection->socketId !== $socketId) {
                $connection->send(json_encode($payload));
            }
        }
    }
    protected function establishConnection(ConnectionInterface $connection)
    {
        $connection->send(json_encode([
            'event' => 'connection_established',
            'data' => json_encode([
                'socket_id' => $connection->socketId,
                'activity_timeout' => 30,
            ]),
        ]));

        DashboardLogger::connection($connection);

        StatisticsLogger::connection($connection);

        return $this;
    }

    public function toArray(): array
    {
        return [
            'occupied' => count($this->subscribedConnections) > 0,
            'subscription_count' => count($this->subscribedConnections),
        ];
    }
}
