@extends('admin.layouts.main')
@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.matematika') }}">Matematika</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">admin</a></li>
            </ol>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card mb-4">
        </div>
    </div>
@endsection
