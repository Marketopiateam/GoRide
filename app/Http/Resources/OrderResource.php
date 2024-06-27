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
            'destination_lat'     => $this->destination_lat,
            'destination_long'    => $this->destination_long??'',
            'destination_address' => $this->destination_address??'',
            'source_lat'          => $this->source_lat??'',
            'source_long'         => $this->destination_long??'',
            'source_address'      => $this->source_address??'',
            'amount'              => $this->offer_rate??'',
            'final_rate'          => $this->final_rate??'',
            'distance'            => $this->distance??'',
            'status'              => $this->status??'',
            'user_name'           => $this->user->full_name??'',
            'user_image'          => $this->user->profile_pic??'',
            'user_phone'          => $this->user->phone_number??'',
            'offer_rate'          => $this->service->offer_rate??'0',
            'created_at'          => $this->created_at??'',
        ];
    }
}
