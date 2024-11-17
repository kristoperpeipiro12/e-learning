@extends('admin.layouts.main')
@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
                <li class="breadcrumb-item"><a href="{{ route('admin.matematika') }}">Matematika</a></li>
            </ol>
        </div>


        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Soal Matematika</h6>
                    <a href="{{ route('admin.matematika.create') }}" class="btn btn-success">+ Tambah</a>
                </div>
                <div class="table-responsive p-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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
                                    <td>{{ $soal->gambar_soal }}</td>
                                    <td>{{ $soal->video_soal }}</td>
                                    <td>{{ $soal->pilihan_a }}</td>
                                    <td>{{ $soal->pilihan_b }}</td>
                                    <td>{{ $soal->pilihan_c }}</td>
                                    <td>{{ $soal->kunci_jawaban }}</td>
                                    <form action="{{ route('matematika.delete', $soal->id_soal) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-danger py-1 px-2"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </td>
                                    </form>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Soal belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
