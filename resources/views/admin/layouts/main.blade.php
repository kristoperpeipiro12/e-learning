@extends('layouts.main')

@section('content')
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('sistem-mulmet/assets/images/logoSekolah.png') }}">
                </div>
                <div class="sidebar-brand-text mx-3">Admin SKPH Quizz</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                    aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Soal</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Bootstrap UI</h6> --}}
                        <a class="collapse-item" href="{{ route('admin.matematika') }}">Matematika</a>
                        <a class="collapse-item" href="{{ route('admin.inggris') }}">Bahasa Inggris</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>



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

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('sistem-mulmet/assets/images/contohUser1.jpg') }}"
                                    style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">admin 1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
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

                @yield('content-admin')





                <!-- Modal Logout -->
                {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="{{ route('login') }}" class="btn btn-primary">Logout</a>
        </div>
    </div>
</div>
</div> --}}

            </div>
            <!---Container Fluid-->
        </div>
        {{--
                penutup div ada dibawah footer pada layouts/main (layouts paling luar)
                --}}
    @endsection
