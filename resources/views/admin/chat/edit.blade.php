@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.chat.title_singular') }}:
                    {{ trans('cruds.chat.fields.id') }}
                    {{ $chat->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('chat.edit', [$chat])
        </div>
    </div>
</div>
@endsection