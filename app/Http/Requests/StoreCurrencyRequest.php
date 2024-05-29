<?php

namespace App\Http\Requests;

use App\Models\Currency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('currency_create'),
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
            'code' => [
                'string',
                'nullable',
            ],
            'decimal_digits' => [
                'string',
                'nullable',
            ],
            'enable' => [
                'boolean',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'symbol' => [
                'string',
                'nullable',
            ],
            'symbol_at_right' => [
                'boolean',
            ],
        ];
    }
}
