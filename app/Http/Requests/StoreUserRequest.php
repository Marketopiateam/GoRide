<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('user_create'),
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
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'password' => [
                'string',
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'locale' => [
                'string',
                'nullable',
            ],
            'country_code' => [
                'string',
                'nullable',
            ],
            'fcm_token' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'boolean',
            ],
            'login_type' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'profile_pic' => [
                'string',
                'nullable',
            ],
            'reviews_count' => [
                'string',
                'nullable',
            ],
            'reviews_sum' => [
                'string',
                'nullable',
            ],
            'wallet_amount' => [
                'string',
                'nullable',
            ],
        ];
    }
}
