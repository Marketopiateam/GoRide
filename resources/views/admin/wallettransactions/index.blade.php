@extends('layouts.admin')
@section('content')
@section('title', $pageTitle)
@section('pageName', $pageTitle)
@push('styles')
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
@endpush
@push('scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/tables-datatables-basic.js') }}"></script>

@endpush
<div class="card">
    <div class="card-datatable table-responsive pt-0">
      <table class="datatables-basic table">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">amount</th>
            <th class="text-center">type</th>
            <th class="text-center">order</th>
            <th class="text-center">driver</th>
            <th class="text-center">user</th>
            <th class="text-center"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($rows as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ number_format($item->amount, 2) }} EGP</td>
                <td class="text-center">{{ $item->type }}</td>
                <td class="text-center">
                    @if ($item->order != null)
                        {{ $item->order->id }}
                    @else
                    <i class="ti ti-circle-check text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if ($item->driver != null)
                        {{ $item->driver->email }}
                    @else
                    <i class="ti ti-circle-check text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if ($item->user != null)
                        {{ $item->user->email }}
                    @else
                    <i class="ti ti-circle-check text-danger"></i>
                    @endif
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-1" href="{{ route('admin.wallet-transactions.edit', $item->id) }}">
                            <i class="ti ti-edit me-1"></i>
                            {{ __('global.edit') }}
                        </a>    
                        <a class="btn btn-success btn-sm me-1" href="{{ route('admin.wallet-transactions.show', $item->id) }}">
                            <i class="ti ti-eye me-1"></i>
                            {{ __('global.show') }}
                        </a>    
                        <a class="btn btn-danger btn-sm me-1" href="{{ route('admin.wallet-transactions.destroy', $item->id) }}">
                            <i class="ti ti-trash me-1"></i>
                            {{ __('global.delete') }}
                        </a>    
                    </div>    
                </td>
            </tr>
            @endforeach

           
        </tbody>
      </table>
    </div>
  </div>
@endsection