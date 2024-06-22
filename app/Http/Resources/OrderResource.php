<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\MapsProcessing;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        return [
            'id'                  => $this->id,
            'destination_lat'     => $this->latitude,
            'destination_long'    => $this->longitude??'',
            'destination_address' => $this->longitude??'',
            'source_lat'          => $this->longitude??'',
            'source_long'         => $this->longitude??'',
            'source_address'      => $this->source_address??'',
            'final_rate'          => $this->final_rate??'',
            'distance'            => $this->distance??'',
            'status'              => $this->status??'',
            'created_at'          => $this->created_at??'',
        ];
    }
}
