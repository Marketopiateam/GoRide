<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="light-style layout-navbar-fixed layout-menu-fixed " dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl'}}"
    data-theme="theme-default"
  data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-starter">

<head>
  <meta charset="utf-8" />
  <title>{{ trans('panel.site_title') }}</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/core.css" class="template-customizer-core-css"/>
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css"/>
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css" />
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.css" />
  <script src="{{ asset('/') }}assets/vendor/js/template-customizer.js"></script>
  <script src="{{ asset('/') }}assets/vendor/js/helpers.js"></script>
  <script src="{{ asset('/') }}assets/js/config.js"></script>
  @livewireStyles
  @stack('styles')

</head>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-sidebar />
            <div class="layout-page">
                <x-nav />
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <x-footer />
                </div>
            </div>
        </div>
    </div>


  <script src="{{ asset('assets') }}/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('assets') }}/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('assets') }}/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('assets') }}/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('assets') }}/vendor/js/menu.js"></script>
  <script src="{{ asset('assets') }}/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('assets') }}/js/main.js"></script>
  @livewireStyles
  @stack('styles')
  <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</body>

</html>
{{-- <!DOCTYPE html>
<html
  lang="{{ app()->getLocale() }}"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets') }}/"
  data-template="vertical-menu-template">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/plyr/plyr.css" />
    <script src="{{ asset('/') }}assets/vendor/js/helpers.js"></script>    
    <script src="{{ asset('/') }}assets/js/config.js"></script>

    @livewireScripts
    @stack('scripts')
</head>

<body class="text-blueGray-800 antialiased">

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-sidebar />
            <div class="layout-page">
                <x-nav />
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <x-footer />
                </div>
            </div>
        </div>
    </div>





    {{-- <div id="app">
        

        <div class="relative md:ml-64 bg-blueGray-50 min-h-screen">

            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">&nbsp;</div>
            </div>

            <div class="relative px-4 md:px-10 mx-auto w-full min-h-full -m-48">
                @if(session('status'))
                    <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
                @endif

              

               
            </div>
        </div>

    </div>
 
    
    
    @livewireScripts
    
    <script src="{{ asset('/') }}assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('/') }}assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('/') }}assets/vendor/js/menu.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/plyr/plyr.js"></script>
    <script src="{{ asset('/') }}assets/js/main.js"></script>

    
    @yield('scripts')
    @stack('scripts')
</body>

</html> --}}