<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('sistem-mulmet/assets/images/logoSekolah.png') }}" rel="icon">
    <title>PH SmartStudy</title>
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/css/ruang-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sistem-mulmet/css/style.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('murid') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('sistem-mulmet/assets/images/logoSekolah.png') }}">
                </div>
                <div class="sidebar-brand-text mx-3">PH SmartStudy</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('murid') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('murid.tugas') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tugas</span></a>
            </li>
            <hr class="sidebar-divider mb-1">
            <!-- <div class="sidebar-heading">
                Features
            </div> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                    aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Mapel</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">TA. 24/25</h6>
                        <a class="collapse-item" href="#">Matematika</a>
                        <a class="collapse-item" href="#">B. Indonesia</a>
                        <a class="collapse-item" href="#">B. Inggris</a>
                        <a class="collapse-item" href="#">B. Mandarin</a>
                        <a class="collapse-item" href="#">IPA</a>
                        <a class="collapse-item" href="#">IPS</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Sekolah Kristen Pelita Hati</div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('sistem-mulmet/assets/images/contohUser1.jpg') }}"
                                    style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Murid 1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('murid') }}">Murid</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li>
                        </ol>
                    </div>
                    @yield('content')
                </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                {{-- <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b> --}}
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->

                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/js/ruang-admin.min.js') }}"></script>
                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/chart.js/Chart.min.js') }}"></script>
                <script src="{{ asset('sistem-mulmet/template/RuangAdmin/js/demo/chart-area-demo.js') }}"></script>
</body>

</html>
