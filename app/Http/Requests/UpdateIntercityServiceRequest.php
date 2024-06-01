<?php

namespace App\Http\Requests;

use App\Models\IntercityService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIntercityServiceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('intercity_service_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'enable' => [
                'boolean',
            ],
            'km_charge' => [
                'string',
                'nullable',
            ],
            'admin_commission' => [
                'string',
                'nullable',
            ],
            'offer_rate' => [
                'boolean',
            ],
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
