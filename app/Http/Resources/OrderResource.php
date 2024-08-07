<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\MapsProcessing;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        $data =   [
            'id'                  => $this->id,
            'destination_lat'     => $this->destination_lat,
            'destination_long'    => $this->destination_long ?? '',
            'destination_address' => $this->destination_address ?? '',
            'source_lat'          => $this->source_lat ?? '',
            'source_long'         => $this->destination_long ?? '',
            'source_address'      => $this->source_address ?? '',
            'amount'              => $this->offer_rate ?? '',
            'final_rate'          => $this->final_rate ?? '',
            'distance'            => $this->distance ?? '',
            'status'              => $this->status,
            'offerdriver'         => $this->offerdriver ?? '',
            'is_offer'            => $this->service->offer_rate ?? '',
            'created_at'          => $this->created_at ?? '',
            'driver'                => ($this->driver != null ? new UserResource($this->driver) : ''),
            'user'                => ($this->user != null ? new UserResource($this->user) : ''),
            'when_date'           => $this->when_date ?? '',
        ];

        return $data;
    }
}
