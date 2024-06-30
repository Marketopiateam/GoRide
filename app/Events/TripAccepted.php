<?php

namespace App\Events;

use App\Models\Order;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TripAccepted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $trip;
    private $user;


    public function __construct(Order $trip, User $user)
    {
        $this->trip = $trip;
        $this->user = $user;
    }


    public function broadcastOn(): array
    {
        return [
            new Channel('trip-'.$this->trip->id)
        ];
    }
    public function broadcastAs()
    {
        return  'TripAccepted';
    }
}
