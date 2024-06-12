<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\MapsProcessing;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'name'      => $this->translate('en')->name,
            'latitude'  => $this->latitude,
            'longitude' => $this->longitude??'',



        ];
    }
}
