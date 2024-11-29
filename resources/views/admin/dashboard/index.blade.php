@extends('admin.layouts.main')


@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        {{-- <div class="dashboard-bread-wrapper"></div> --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
            </ol>
        </div>

        <div class="dashboard-content-custom">
            <div class="card-wrapper-custom">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Soal
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totSoal }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span> -->
                                    <span>Tahun Ajar 2024/2025</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <!-- <i class="fas fa-shopping-cart fa-2x text-success"></i> -->
                                <i class="fa fa-list fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New User Card Example -->

                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mapel
                                </div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totMapel }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span> -->
                                    <span>Tahun Ajar 2024/2025</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-book fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->

                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Pemain
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span> -->
                                    <span>Tahun Ajar 2024/2025</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-play fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <div class="tabel-wrapper-custom">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">High Score </h6>
                        </div>
                        {{-- area chart  --}}
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    @endsection
