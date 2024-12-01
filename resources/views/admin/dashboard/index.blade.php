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
                     <div class="card-header py-lg-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Jumlah Pemain</h6>
                     </div>
                     <div class="card-body">
                         <!-- Menyesuaikan tinggi elemen canvas -->
                         <canvas id="playerChart" style="max-height: 300px;"></canvas>
                     </div>
                 </div>
             </div>
         </div>

         

        </div>
        <!--Row-->

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
            fetch('{{ route("admin.chart.data") }}')// Panggil endpoint '/chart-data' untuk mendapatkan data
              .then(response => response.json()) // Parse response JSON
              .then(data => {
                  const ctx = document.getElementById('playerChart').getContext('2d');
                  new Chart(ctx, {
                      type: 'line', // Jenis chart
                      data: {
                          labels: data.labels, // Label diambil dari API
                          datasets: [{
                              label: 'Jumlah Pemain per Bulan'
                              , data: data.values, // Data nilai diambil dari API
                              backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar dataset
                              borderColor: 'rgba(54, 162, 235, 1)', // Warna garis dataset
                              borderWidth: 2
                              , tension: 0.4 // Membuat garis menjadi melengkung
                          }]
                      }
                      , options: {
                          responsive: true
                          , plugins: {
                              legend: {
                                  position: 'top' // Posisi legenda di atas chart
                              }
                          }
                          , scales: {
                              y: {
                                  beginAtZero: true // Skala dimulai dari nol
                              }
                          }
                      }
                  });
              });

      </script>



    @endsection
