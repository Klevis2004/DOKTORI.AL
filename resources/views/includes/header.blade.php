@if (Auth::check())

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Doktorri.al</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <!-- jquery.vectormap css -->
        <link href="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
            rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
            type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Plugin css -->
        <link href="{{ asset('admin/assets/libs/@fullcalendar/core/main.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admin/assets/libs/@fullcalendar/daygrid/main.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admin/assets/libs/@fullcalendar/bootstrap/main.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admin/assets/libs/@fullcalendar/timegrid/main.min.css') }}" rel="stylesheet"
            type="text/css" />

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-container--default .select2-selection--single {
                height: calc(2.25rem + 2px);
                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: calc(1.5 + .75rem + 2px);
            }

            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: calc(1.5 + .75rem + 2px);
            }
        </style>
    </head>

    <body data-layout="detached" data-topbar="colored">
        @if (\Session::has('success'))
            <script>
                Swal.fire(
                    '',
                    '{{ \Session::get('success') }}',
                    'success'
                )
            </script>
        @endif

        @if (\Session::has('info'))
            <script>
                Swal.fire(
                    '',
                    '{{ \Session::get('info') }}',
                    'info'
                )
            </script>
        @endif

        @if (\Session::has('error'))
            <script>
                Swal.fire(
                    'Gabim!',
                    '{{ \Session::get('error') }}',
                    'error'
                )
            </script>
        @endif



        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <div class="container-fluid">
            <!-- Begin page -->
            <div id="layout-wrapper">

                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <div class="float-end">

                                <div class="dropdown d-inline-block d-lg-none ms-2">
                                    <button type="button" class="btn header-item noti-icon waves-effect"
                                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="mdi mdi-magnify"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                        aria-labelledby="page-header-search-dropdown">

                                        <form class="p-3">
                                            <div class="m-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ..."
                                                        aria-label="Recipient's username">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit"><i
                                                                class="mdi mdi-magnify"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="dropdown d-none d-lg-inline-block ms-1">
                                    <button type="button" class="btn header-item noti-icon waves-effect"
                                        data-toggle="fullscreen">
                                        <i class="mdi mdi-fullscreen"></i>
                                    </button>
                                </div>

                                <div class="dropdown d-inline-block">
                                    <button type="button" class="btn header-item waves-effect"
                                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img class="rounded-circle header-profile-user"
                                            src="{{ asset('admin/assets/images/' . Auth::user()->photo) }}"
                                            alt="Header Avatar">
                                        <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a class="dropdown-item" href="{{ route('contain.profile') }}"><i
                                                class="bx bx-user font-size-16 align-middle me-1"></i>
                                            Profile</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="bx bx-wallet font-size-16 align-middle me-1"></i> My
                                            Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><i
                                                class="bx bx-wrench font-size-16 align-middle me-1"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                            Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <form class="logout-form" action="{{ route('auth.logout') }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"
                                                style="text-decoration: none; color: rgb(0, 0, 0)"><i
                                                    class="bx bx-log-out font-size-16 align-middle me-1"></i>
                                                Log
                                                Out</button>
                                        </form>

                                    </div>
                                </div>

                                <div class="dropdown d-inline-block">
                                    <button type="button"
                                        class="btn header-item noti-icon right-bar-toggle waves-effect"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                        aria-controls="offcanvasExample">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </button>
                                </div>

                            </div>
                            <div>
                                <!-- LOGO -->
                                <div class="navbar-brand-box">
                                    <a href="index.html" class="logo logo-dark">
                                        <span class="logo-sm">
                                            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt=""
                                                height="20">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="{{ asset('admin/assets/images/logo-dark.png') }}"
                                                alt="" height="17">
                                        </span>
                                    </a>

                                    <a href="{{ route('contain.welcome') }}" class="logo logo-light">
                                        <span class="logo-sm">
                                            <img src="{{ asset('admin/assets/images/logo.png') }}" alt=""
                                                height="35">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="{{ asset('admin/assets/images/logo.png') }}" alt=""
                                                height="35">
                                        </span>
                                    </a>
                                </div>

                                <button type="button"
                                    class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                                    id="vertical-menu-btn">
                                    <i class="fa fa-fw fa-bars"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </header>
                <div class="vertical-menu">

                    <div class="h-100">

                        <div class="user-wid text-center py-4">
                            <div class="user-img">
                                <img src="{{ asset('admin/assets/images/' . Auth::user()->photo) }}" alt=""
                                    class="avatar-md mx-auto rounded-circle">
                            </div>

                            <div class="mt-3">

                                <a href="#"
                                    class="text-body fw-medium font-size-16">{{ Auth::user()->name }}</a>
                                <p class="text-muted mt-1 mb-0 font-size-13">Doktor i specializuar</p>

                            </div>
                        </div>

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title">Menu</li>
                                <li>
                                    <a href="{{ route('contain.kartela') }}" class=" waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span>Kartela</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contain.sherbimi') }}" class=" waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span>Shërbimi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contain.historiku') }}" class=" waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span>Historiku</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contain.calendar') }}" class=" waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span>Calendar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
@endif
