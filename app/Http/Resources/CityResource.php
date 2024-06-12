<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\MapsProcessing;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        return [
            'name'      => $this->name,
            'latitude'  => $this->latitude,
            'longitude' => $this->longitude??'',



        ];
    }
}
