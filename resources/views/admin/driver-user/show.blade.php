@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.driverUser.title_singular') }}:
                    {{ trans('cruds.driverUser.fields.id') }}
                    {{ $driverUser->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.id') }}
                            </th>
                            <td>
                                {{ $driverUser->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.country_code') }}
                            </th>
                            <td>
                                {{ $driverUser->country_code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.document_verification') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $driverUser->document_verification ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $driverUser->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $driverUser->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.fcm_token') }}
                            </th>
                            <td>
                                {{ $driverUser->fcm_token }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.full_name') }}
                            </th>
                            <td>
                                {{ $driverUser->full_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.is_online') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $driverUser->is_online ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.login_type') }}
                            </th>
                            <td>
                                {{ $driverUser->login_type }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.phone_number') }}
                            </th>
                            <td>
                                {{ $driverUser->phone_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.profile_pic') }}
                            </th>
                            <td>
                                {{ $driverUser->profile_pic }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.reviews_count') }}
                            </th>
                            <td>
                                {{ $driverUser->reviews_count }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.reviews_sum') }}
                            </th>
                            <td>
                                {{ $driverUser->reviews_sum }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.rotation') }}
                            </th>
                            <td>
                                {{ $driverUser->rotation }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.service') }}
                            </th>
                            <td>
                                {{ $driverUser->service }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverUser.fields.wallet_amount') }}
                            </th>
                            <td>
                                {{ $driverUser->wallet_amount }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('driver_user_edit')
                    <a href="{{ route('admin.driver-users.edit', $driverUser) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.driver-users.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection