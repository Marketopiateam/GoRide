<?php

namespace App\Websockets;


use Exception;
use App\Models\User;

use App\Events\MessageSent;
use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;


class UpdateDriverHandler extends BaseSocketHandler implements MessageComponentInterface
{


    function onMessage(ConnectionInterface $from, MessageInterface $msg)
    {

        $body = collect(json_decode($msg->getPayload(), true));
        $payload = $body->get('payload');
        $id = $body->get('id');
      $user=   User::find(1);
      $user->update(['latitude'=>$payload['lat'],'longitude'=>$payload['long']]);
      dump($payload['lat'],$payload['long']);
        // dump($payload, $id, $body);
        // $post = Post::query()->findOrFail($id);
        // $repo = new PostRepository();
        // $updated = $repo->update($post, $payload);
        // $response = (new PostResource($updated))->toJson();
        $from->send($body);
    }
}
