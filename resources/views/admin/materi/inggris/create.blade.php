@extends('admin.layouts.main')
@section('content-admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('halaman')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">@yield('slash-page')</li> --}}
                <li class="breadcrumb-item"><a href="{{ route('admin.inggris') }}">English</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.inggris.create') }}">Create</a></li>
            </ol>
        </div>

        <div class="quiz-wrapper">
            <div class="quiz-input-container">
                <header>
                    <h1>Tambah Soal Bahasa Inggris</h1>
                    <p>Masukkan pertanyaan quiz beserta pilihan, gambar, atau video</p>
                </header>
                <form action="{{ route('inggris.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id_mapel" value="mp_2" hidden>
                    <!-- Question Text -->
                    <div class="form-group">
                        <label for="question">Pertanyaan:</label>
                        <textarea id="question" name="soal" rows="4" placeholder="Enter the question here..." required>{{ old('soal') }}</textarea>
                    </div>

                    <!-- Upload Image -->
                    <div class="form-group">
                        <label for="image">Upload Image (optional):</label>
                        <input type="file" id="image" name="gambar_soal" accept="image/*"
                            value="{{ old('gambar_soal') }}">
                    </div>

                    <!-- Upload Video -->
                    <div class="form-group">
                        <label for="video">Upload Video (optional):</label>
                        <input type="file" id="video" name="video_soal" accept="video/*"
                            value="{{ old('video_soal') }}">
                    </div>

                    <!-- Answer Options -->
                    <div class="form-group">
                        <label>Pilihan Jawaban:</label>
                        <div class="option">
                            <label for="option-a">a. </label>
                            <input type="text" autocomplete="false" id="option-a" name="pilihan_a"
                                value="{{ old('pilihan_a') }}" placeholder="Option A" required>
                        </div>
                        <div class="option">
                            <label for="option-b">b. </label>
                            <input type="text" autocomplete="false" id="option-b" name="pilihan_b"
                                value="{{ old('pilihan_b') }}" placeholder="Option B" required>
                        </div>
                        <div class="option">
                            <label for="option-c">c. </label>
                            <input type="text" autocomplete="false" id="option-c" name="pilihan_c"
                                value="{{ old('pilihan_c') }}" placeholder="Option C" required>
                        </div>
                    </div>

                    <!-- Correct Answer -->
                    <div class="form-group">
                        <label for="correct-answer">Kunci Jawaban:</label>
                        <select id="correct-answer" name="kunci_jawaban" required>
                            <option value="" disabled {{ old('kunci_jawaban') ? '' : 'selected' }}>Select the
                                correct answer</option>
                            <option value="a" {{ old('kunci_jawaban') == 'a' ? 'selected' : '' }}>a</option>
                            <option value="b" {{ old('kunci_jawaban') == 'b' ? 'selected' : '' }}>b</option>
                            <option value="c" {{ old('kunci_jawaban') == 'c' ? 'selected' : '' }}>c</option>
                        </select>
                    </div>


                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="submit-btn">Simpan Pertanyaan</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
