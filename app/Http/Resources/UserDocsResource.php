<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDocsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'criminal_record_image'=> url('files/'.$this->id.'/'. $this->profile->criminal_record_image),
            'car_licenses' => [
                'front_license_image'=> url('files/'.$this->id.'/'. $this->profile->car_licenses->front_license_image),
                'back_license_image'=>url('files/'.$this->id.'/'.$this->profile->car_licenses->back_license_image),
            ],
            'identity' => [
                'front_identity_image'=>url('files/'.$this->id.'/'.$this->profile->identity->front_identity_image),
                'back_identity_image'=>url('files/'.$this->id.'/'.$this->profile->identity->back_identity_image),
            ],
            'driver_licenses' => [
                'front_license_image'=>url('files/'.$this->id.'/'.$this->profile->driver_licenses->front_license_image),
                'back_license_image'=>url('files/'.$this->id.'/'.$this->profile->driver_licenses->back_license_image),
            ],
        ];
    }
}
