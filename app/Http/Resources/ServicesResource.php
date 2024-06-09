<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\MapsProcessing;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
{


    public function toArray(Request $request): array
    {

        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'image'       => $this->image,
            'offer_rate'       => $this->offer_rate
        ];
    }
}
