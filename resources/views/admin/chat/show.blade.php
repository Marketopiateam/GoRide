@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.chat.title_singular') }}:
                    {{ trans('cruds.chat.fields.id') }}
                    {{ $chat->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.id') }}
                            </th>
                            <td>
                                {{ $chat->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.customer') }}
                            </th>
                            <td>
                                @if($chat->customer)
                                    <span class="badge badge-relationship">{{ $chat->customer->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.customer_name') }}
                            </th>
                            <td>
                                {{ $chat->customer_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.customer_profile_image') }}
                            </th>
                            <td>
                                {{ $chat->customer_profile_image }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.driver') }}
                            </th>
                            <td>
                                @if($chat->driver)
                                    <span class="badge badge-relationship">{{ $chat->driver->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.driver_name') }}
                            </th>
                            <td>
                                {{ $chat->driver_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.driver_profile_image') }}
                            </th>
                            <td>
                                {{ $chat->driver_profile_image }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.last_message') }}
                            </th>
                            <td>
                                {{ $chat->last_message }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.last_sender') }}
                            </th>
                            <td>
                                {{ $chat->last_sender }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.chat.fields.order') }}
                            </th>
                            <td>
                                @if($chat->order)
                                    <span class="badge badge-relationship">{{ $chat->order->accepted_driver ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('chat_edit')
                    <a href="{{ route('admin.chats.edit', $chat) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.chats.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection