@extends('layouts.admin')
@section('content')
@section('title', $pageTitle)
@section('pageName', $pageTitle)
<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            
            <div class="card-body">
                <form action="{{ route('admin.marketopia-browsers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="english-tab" data-toggle="tab" href="#english">English</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arabic-tab" data-toggle="tab" href="#arabic">Arabic</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="english">
                                <div class="form-group">
                                    <label for="name_en">Name (English)</label>
                                    <input type="text" class="form-control" id="name_en" name="name_en">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arabic">
                                <div class="form-group">
                                    <label for="name_ar">Name (Arabic)</label>
                                    <input type="text" class="form-control" id="name_ar" name="name_ar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('global.save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
    $('a[data-toggle="tab"]').on('click', function (e) {
        var target = $(e.target).attr("href") // activated tab
        $(target).show().addClass('show active').siblings().removeClass('show active').hide();
        $('.nav.nav-tabs .nav-link').each(function() {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
    });
    $('a[data-toggle="tab"]').first().trigger('shown.bs.tab');
});
    </script>    
@endpush
@endsection