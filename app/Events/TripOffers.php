<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\Http\Resources\OrderWithDriverResource;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Database\Eloquent\Model;

class TripOffers implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $trip;
    public function __construct(Model $trip)
    {
        $this->trip =  $trip;
    }
    public function broadcastOn(): array
    {
        return [
            new Channel('trip-'.$this->trip->id)
        ];
    }
    public function broadcastWith()
    {
        // return  $this->message;
        return (new OrderWithDriverResource($this->trip))->toArray(request());
    }
    public function broadcastAs()
    {
        return  'offer';
    }
}
