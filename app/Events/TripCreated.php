<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TripCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $trip;

    public function __construct(Order $trip )
    {
        $this->trip =  $trip;

    }


    public function broadcastOn(): array
    {
        return [
               new Channel('drivers')
        ];
    }
    public function broadcastWith()
    {
        // return  $this->message;
        return json_encode($this->trip);
    }
    public function broadcastAs()
    {
        return  'drivers1';
    }
}
