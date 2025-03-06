<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-compact light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>@yield('title') | Hathiyaar</title>

        <meta name="description" content="Hathiyaar" />
        <meta name="keywords" content="Hathiyaar">
        <link rel="canonical" href="http://localhost:8000">

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
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo ">
                        <a href="javascript:void(0)" class="app-brand-link">
                            <img src="{{ asset('assets/admin/img/logos/logo.png') }}" alt="Logo" width="180" >
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                        </a>
                    </div>
                    <div class="menu-inner-shadow"></div>
                    <ul class="menu-inner py-1">
                        <li class="menu-item {{ request()->is('admin/dashboard') === true ? 'active' : '' }} waves-effect waves-light">
                            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                <div>Dashboard</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item active open">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                <div data-i18n="Dashboards">Dashboards</div>
                                <div class="badge bg-primary rounded-pill ms-auto">5</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item active">
                                <a href="index-2.html" class="menu-link">
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                                </li>
                                <li class="menu-item">
                                <a href="dashboards-crm.html" class="menu-link">
                                    <div data-i18n="CRM">CRM</div>
                                </a>
                                </li>
                                <li class="menu-item">
                                <a href="app-ecommerce-dashboard.html" class="menu-link">
                                    <div data-i18n="eCommerce">eCommerce</div>
                                </a>
                                </li>
                                <li class="menu-item">
                                <a href="app-logistics-dashboard.html" class="menu-link">
                                    <div data-i18n="Logistics">Logistics</div>
                                </a>
                                </li>
                                <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
                                    <div data-i18n="Academy">Academy</div>
                                </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </aside>

                <div class="layout-page">
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="ti ti-menu-2 ti-sm"></i>
                            </a>
                        </div>
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        @if (Session::has('themeMode') && Session::get('themeMode') === 'dark')
                                            <i class="ti ti-md ti-moon"></i>
                                        @else
                                            <i class="ti ti-md ti-sun"></i>
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.switch.theme', 'light') }}">
                                                <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.switch.theme', 'dark') }}">
                                                <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/admin/img/avatars/1.png') }}" alt="" class="h-auto rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('assets/admin/img/avatars/1.png') }}" alt="" class="h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        {{-- <span class="fw-medium d-block">{{ Auth::user()->name }}</span> --}}
                                                        <span class="fw-medium d-block">Administrator</span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                                <i class="ti ti-user-check me-2 ti-sm"></i>
                                                <span class="align-middle">Profile</span>
                                            </a>
                                        </li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('auth.admin.logout') }}">
                                                <i class="ti ti-logout me-2 ti-sm"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @yield('content')
                        </div>

                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl">
                                <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                    <div>
                                        &copy; {{ date('Y') }}, Developed by <a href="https://techrevivals.net/" target="_blank" class="footer-link text-primary fw-medium">TechRevivals</a>
                                    </div>
                                    <div class="d-none d-lg-inline-block">
                                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
                                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
                                        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
            <div class="drag-target"></div>
        </div>

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
