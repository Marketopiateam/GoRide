@extends('layouts.admin')
@section('content')
@section('title', $pageTitle)
@section('pageName', $pageTitle)
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush
@push('scripts')
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script>
    $(function() {
        var select2 = $('.select2');
        if (select2.length) {
            select2.each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    placeholder: 'Select value',
                    dropdownParent: $this.parent()
                });
            });
        }
    })
</script>
@endpush
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                  <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-title">{{ __('cruds.service.fields.title') }}</label>
                                <input type="text" name="full_name" class="form-control" id="basic-default-title" placeholder="{{ __('cruds.service.fields.title') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-km_charge">{{ __('cruds.service.fields.km_charge') }}</label>
                                <input type="km_charge" name="number" step="0.5" class="form-control" placeholder="{{ __('cruds.service.fields.km_charge') }}">
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" name="enable" checked="">
                                    <span class="switch-toggle-slider">
                                      <span class="switch-on">
                                        <i class="ti ti-check"></i>
                                      </span>
                                      <span class="switch-off">
                                        <i class="ti ti-x"></i>
                                      </span>
                                    </span>
                                    <span class="switch-label">
                                        {{ __('cruds.service.fields.enable') }}
                                    </span>
                                  </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" name="offer_rate">
                                    <span class="switch-toggle-slider">
                                      <span class="switch-on">
                                        <i class="ti ti-check"></i>
                                      </span>
                                      <span class="switch-off">
                                        <i class="ti ti-x"></i>
                                      </span>
                                    </span>
                                    <span class="switch-label">
                                        {{ __('cruds.service.fields.offer_rate') }}
                                    </span>
                                  </label>
                            </div>
                        </div>
                        <div class="col-lg-12 select2-primary">
                            <label class="form-label" for="multicol-roles">{{ __('cruds.admin.fields.roles') }}</label>
                            <select id="multicol-roles" name="intercity_type" class="select2 form-select" multiple>
                                <option value="0">{{ __('global.intercity') }}</option>
                                <option value="0">{{ __('global.intercity') }}</option>

                            </select>
                          </div>

                        
                    </div>
                   
                    
                    </div>
                   
                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('global.save') }}</button>
                  </form>
                </div>
        </div>
  </div>




@endsection

{{-- @extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.create') }}
                    {{ trans('cruds.order.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
             @livewire('order.create')
    

</div>
    </div>
</div>
@endsection --}}