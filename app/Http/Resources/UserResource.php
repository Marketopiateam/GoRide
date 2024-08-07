<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id'          => $this->id,
            'name'          => $this->full_name,
            'phone'         => $this->phone_number,
            'image'         => $this->imageurl??'',
            'country_id'    => $this->country_id??'',
            'city'          => $this->city_id??'',
            'email'         => $this->email ?? '',
            'wallet_amount' => number_format($this->wallet_amount,2) ?? '',
            'driver_status' => $this->profile->status  ?? '',
            'is_driver'     => $this->profile != null  ?1:0 ,
            'is_online'     => $this->is_online  ,

        ];

        if ($this->token) {
            $data['token'] = $this->token;
        }

        // if ($this->credit) {
        //     $data['creadit'] = $this->creadit;
        // }

        return $data;
    }
}
