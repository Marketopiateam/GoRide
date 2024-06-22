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
            'name'     => $this->full_name,
            'phone'    => $this->phone_number,
            'image'    => $this->imageurl??'',
            'city'     => $this->city_id??'',
            'email'    => $this->email ?? '',
            'wallet_amount'    => number_format($this->wallet_amount,2) ?? '',


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
