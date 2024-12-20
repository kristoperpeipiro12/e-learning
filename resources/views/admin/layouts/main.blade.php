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
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.mapel') }}">
                {{-- <i class="fas fa-fw fa-sign-out-alt"></i> --}}
                <i class="fas fa-fw fa-solid fa-book-open"></i>
                <span>Mapel</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-fw fa-solid fa-server"></i>
                <span>Soal</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {{-- <h6 class="collapse-header">Bootstrap UI</h6> --}}
                    {{-- @forelse ($listMapel as $pelajaran)
                            <a class="collapse-item" href="{{ route('admin.{{ $pelajaran->mapel }}') }}">{{ $pelajaran->mapel }}</a>
                    @empty
                    <span>Belum Ada Mapel!</span>
                    @endforelse --}}
                    <a class="collapse-item" href="{{ route('admin.matematika') }}">Matematika</a>
                    <a class="collapse-item" href="{{ route('admin.inggris') }}">Bahasa Inggris</a>
                </div>
            </div>
        </li>
      <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
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
            </nav>
            <!-- Topbar -->

            <!-- Container Fluid-->

            @yield('content-admin')





            <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-2" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="logoutModalLabel">Keluar</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <p class="text-center"><span>Apakah Anda yakin ingin keluar</span></p>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                          <form action="{{ route('logout.post') }}" method="POST" class="d-inline">
                              @csrf
                              <button type="submit" class="btn btn-primary">Keluar</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>



        </div>
        <!---Container Fluid-->
    </div>

    @endsection
