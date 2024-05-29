@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.ordersIntercity.title_singular') }}:
                    {{ trans('cruds.ordersIntercity.fields.id') }}
                    {{ $ordersIntercity->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.id') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.accepted_driver') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->accepted_driver }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.admin_commission') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->admin_commission }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.comments') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->comments }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.destination_city') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->destination_city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.destination_location_lat_lng') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->destination_location_lat_lng }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.destination_location_name') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->destination_location_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.distance') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->distance }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.distance_type') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->distance_type }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.driver') }}
                            </th>
                            <td>
                                @if($ordersIntercity->driver)
                                    <span class="badge badge-relationship">{{ $ordersIntercity->driver->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.final_rate') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->final_rate }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.intercity_service') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->intercity_service }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.intercityservice') }}
                            </th>
                            <td>
                                @if($ordersIntercity->intercityservice)
                                    <span class="badge badge-relationship">{{ $ordersIntercity->intercityservice->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.number_of_passenger') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->number_of_passenger }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.offer_rate') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->offer_rate }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.otp') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->otp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.parcel_dimension') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->parcel_dimension }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.parcel_image') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->parcel_image }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.parcel_weight') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->parcel_weight }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.payment_status') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->payment_status }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.payment_type') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->payment_type }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.position') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->position }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.rejected_driver') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->rejected_driver }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.source_city') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->source_city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.source_location_lat_lng') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->source_location_lat_lng }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.source_location_name') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->source_location_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.status') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->status }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.tax_list') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->tax_list }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.user') }}
                            </th>
                            <td>
                                @if($ordersIntercity->user)
                                    <span class="badge badge-relationship">{{ $ordersIntercity->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.when_dates') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->when_dates }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordersIntercity.fields.when_time') }}
                            </th>
                            <td>
                                {{ $ordersIntercity->when_time }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('orders_intercity_edit')
                    <a href="{{ route('admin.orders-intercities.edit', $ordersIntercity) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.orders-intercities.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection