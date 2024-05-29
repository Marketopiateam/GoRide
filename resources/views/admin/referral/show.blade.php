@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.referral.title_singular') }}:
                    {{ trans('cruds.referral.fields.id') }}
                    {{ $referral->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.referral.fields.id') }}
                            </th>
                            <td>
                                {{ $referral->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.referral.fields.referral_by') }}
                            </th>
                            <td>
                                {{ $referral->referral_by }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.referral.fields.referral_code') }}
                            </th>
                            <td>
                                {{ $referral->referral_code }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('referral_edit')
                    <a href="{{ route('admin.referrals.edit', $referral) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.referrals.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection