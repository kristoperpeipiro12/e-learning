@extends('admin.layouts.main')
@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
                <li class="breadcrumb-item"><a href="{{ route('admin.mapel') }}">Mapel</a></li>
            </ol>
        </div>


        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mata Pelajaran </h6>
                    <button id="openModal" class="btn btn-success">+ Tambah</button>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($listMapel as $mapel)
                                <tr>
                                    <td>{{ $number = $number + 1 }}</td>
                                    <td>{{ $mapel->mapel }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Mapel belum Tersedia.
                                </div>
                            @endforelse
                            {{-- <tr>
                                <td>1</td>
                                <td>Matematika</td>
                                <td><i class="far fa-edit icon-custom icon-edit-custom icon-me2-custom"
                                        data-toggle="tooltip" data-placement="top" title="Edit"></i><i
                                        class="fas fa-trash-alt icon-custom icon-hapus-custom" data-toggle="tooltip"
                                        data-placement="top" title="Delete"></i></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Modal Section --}}
        <div class="background-overlay" id="modal">
            <div class="modal-window">
                <a class="btn close-button" id="closeModal">
                    <i class="fas fa-times"></i>
                </a>
                <div class="modal-header">Tambah Mata Pelajaran</div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('mapel.store') }}" method="POST">
                        @csrf
                        <label for="subjectName">Nama Mata Pelajaran</label>
                        <input type="text" id="subjectName" name="mapel" class="input-field"
                            value="{{ old('mapel') }}" autocomplete="off" placeholder="Masukkan nama mata pelajaran"
                            required>
                        @error('mapel')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="button-group">
                            <button type="reset" class="secondary-button button">Reset</button>
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
