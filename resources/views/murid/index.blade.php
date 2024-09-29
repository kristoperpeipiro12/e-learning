@extends('murid.layouts.main')

@section('halaman', 'Dashboard')
@section('slash-page', 'Dashboard')

@section('content')
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Mapel</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                                <span>Tahun Ajar 2024/2025</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                            <i class="fa fa-window-maximize fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Tugas Belum
                                Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
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
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Modul</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">22</div>
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
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Video</div>
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

        <!-- Area Chart -->
        <div class="w-100">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rata-Rata Nilai Tugas</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
