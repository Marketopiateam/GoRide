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

class TripCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $trip;


    /**
     * Create a new event instance.
     */
    public function __construct(Order $trip )
    {
        $this->trip = $trip;

    }


    public function broadcastOn(): array
    {
        return [
               new Channel('drivers')
        ];
    }
    public function broadcastAs()
    {
        return  'drivers';
    }
}
