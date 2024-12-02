@extends('admin.layouts.main')
@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
                <li class="breadcrumb-item"><a href="{{ route('admin.inggris') }}">English</a></li>
            </ol>
        </div>


        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Soal Bahasa Inggris </h6>
                    <a href="{{ route('admin.inggris.create') }}" class="btn btn-success">+ Tambah</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Gambar</th>
                                <th>Video</th>
                                <th>Pilihan A</th>
                                <th>Pilihan B</th>
                                <th>Pilihan C</th>
                                <th>Kunci Jawaban</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($listSoal as $soal)
                            <tr>
                                <td>{{ $number = $number + 1 }}</td>
                                <td>{{ $soal->soal }}</td>
                                <td>
                                    @if ($soal->gambar_soal)
                                    <img src="{{ asset('storage/' . $soal->gambar_soal) }}" alt="Gambar Soal" style="max-width: 100px; height: auto;">
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    @if ($soal->video_soal)
                                    <video width="150" controls>
                                        <source src="{{ asset('storage/' . $soal->video_soal) }}" type="video/{{ pathinfo($soal->video_soal, PATHINFO_EXTENSION) }}">
                                        Browser Anda tidak mendukung video.
                                    </video>
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $soal->pilihan_a }}</td>
                                <td>{{ $soal->pilihan_b }}</td>
                                <td>{{ $soal->pilihan_c }}</td>
                                <td>{{ $soal->kunci_jawaban }}</td>
                                <td>
                                    <!-- Trigger Modal Button -->
                                    <button type="button" class="btn btn-danger py-1 px-2" data-toggle="modal" data-target="#deleteModal" data-id="{{ $soal->id_soal }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Soal belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Soal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus soal ini?
                                </div>
                                <div class="modal-footer">
                                    <form id="deleteForm" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- JavaScript to update the form action dynamically -->
                    <script>
                        $('#deleteModal').on('show.bs.modal', function(event) {
                            var button = $(event.relatedTarget); // Button that triggered the modal
                            var soalId = button.data('id'); // Extract info from data-* attributes
                            var actionUrl = '/inggris/delete/' + soalId; // Set the correct delete URL
                            var form = $(this).find('#deleteForm');
                            form.attr('action', actionUrl); // Update the form action
                        });

                    </script>
                </div>
            </div>
        </div>
    @endsection
