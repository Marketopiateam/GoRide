@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.reviewCustomer.title_singular') }}:
                    {{ trans('cruds.reviewCustomer.fields.id') }}
                    {{ $reviewCustomer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.id') }}
                            </th>
                            <td>
                                {{ $reviewCustomer->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.comment') }}
                            </th>
                            <td>
                                {{ $reviewCustomer->comment }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.customer') }}
                            </th>
                            <td>
                                @if($reviewCustomer->customer)
                                    <span class="badge badge-relationship">{{ $reviewCustomer->customer->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.driver') }}
                            </th>
                            <td>
                                @if($reviewCustomer->driver)
                                    <span class="badge badge-relationship">{{ $reviewCustomer->driver->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.date') }}
                            </th>
                            <td>
                                {{ $reviewCustomer->date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.rating') }}
                            </th>
                            <td>
                                {{ $reviewCustomer->rating }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewCustomer.fields.type') }}
                            </th>
                            <td>
                                {{ $reviewCustomer->type }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('review_customer_edit')
                    <a href="{{ route('admin.review-customers.edit', $reviewCustomer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.review-customers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection