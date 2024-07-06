<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutCityOffersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->id,
            'offer_rate'      => $this->offer_rate,
            'car_color'       => $this->car_color,
            'car_number'      => $this->car_number,
            'car_brand'       => $this->car_brand,
            'car_model'       => $this->car_model,
            'driver'          => $this->driver,
        ];
    }
}
