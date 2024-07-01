<?php

namespace App\Events;

use App\Models\Trip;
use App\Models\User;
use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TripEnded implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $trip;
    private $user;

    /**
     * Create a new event instance.
     */
    public function __construct(Order $trip, User $user)
    {
        $this->trip = $trip;
        $this->user = $user;
    }

  
    public function broadcastOn(): array
    {
        return [
            new Channel('trip_' . $this->trip->id)
        ];
    }
    public function broadcastAs()
    {
        return  'drivers';
    }
}
