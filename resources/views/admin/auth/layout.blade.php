<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-compact light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>@yield('title') | MecTools</title>

        <meta name="description" content="MecTools" />
        <meta name="keywords" content="MecTools">
        <link rel="canonical" href="{{ env('http://localhost') }}">

        <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicons/favicon.png') }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/tabler-icons.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/flag-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/node-waves/node-waves.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/typeahead-js/typeahead.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/swiper/swiper.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/pages/cards-advance.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/toastr/toastr.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/sweetalert2/sweetalert2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/spinkit/spinkit.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />

        <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
        {{-- <script src="{{ asset('assets/admin/vendor/js/template-customizer.js') }}"></script> --}}
        <script src="{{ asset('assets/admin/js/config.js') }}"></script>

        @if (Session::has('themeMode') && Session::get('themeMode') === 'dark')
            <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/core-dark.css') }}" class="template-customizer-theme-css" />
            <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/theme-semi-dark-dark.css') }}" class="template-customizer-theme-css" />
        @endif

    </head>
    <body>
        <div id="preloader">
            <div class="sk-grid sk-primary">
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
            </div>
        </div>
        @yield('content')

        <input type="hidden" id="url" value="{{ url('/') }}">
        <input type="hidden" id="success" value="{{ Session::get('success') }}">
        <input type="hidden" id="info" value="{{ Session::get('info') }}">
        <input type="hidden" id="warning" value="{{ Session::get('warning') }}">
        <input type="hidden" id="error" value="{{ Session::get('error') }}">

        <script src="{{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/typeahead-js/typeahead.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/js/menu.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/swiper/swiper.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/admin/js/main.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/toastr/toastr.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/admin/js/script.js') }}"></script>
        <script src="{{ asset('assets/admin/js/dashboards-analytics.js') }}"></script>
    </body>
</html>
