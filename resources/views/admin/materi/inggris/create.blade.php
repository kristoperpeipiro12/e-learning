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
            <h6 class="m-2 align-self-start font-weight-bold text-primary">Tambah Soal Inggris</h6>
            <div class="quiz-input-container">
                <header>
                    <h1>Quiz Input Form</h1>
                    <p>Input your quiz questions with options, images, or videos.</p>
                </header>
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- Question Text -->
                    <div class="form-group">
                        <label for="question">Question Text:</label>
                        <textarea id="question" name="question" rows="4" placeholder="Enter the question here..." required></textarea>
                    </div>

                    <!-- Upload Image -->
                    <div class="form-group">
                        <label for="image">Upload Image (optional):</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>

                    <!-- Upload Video -->
                    <div class="form-group">
                        <label for="video">Upload Video (optional):</label>
                        <input type="file" id="video" name="video" accept="video/*">
                    </div>

                    <!-- Answer Options -->
                    <div class="form-group">
                        <label>Answer Options:</label>
                        <div class="option">
                            <label for="option-a">a. </label>
                            <input type="text" id="option-a" name="options[]" placeholder="Option A" required>
                        </div>
                        <div class="option">
                            <label for="option-b">b. </label>
                            <input type="text" id="option-b" name="options[]" placeholder="Option B" required>
                        </div>
                        <div class="option">
                            <label for="option-c">c. </label>
                            <input type="text" id="option-c" name="options[]" placeholder="Option C" required>
                        </div>
                    </div>

                    <!-- Correct Answer -->
                    <div class="form-group">
                        <label for="correct-answer">Correct Answer:</label>
                        <select id="correct-answer" name="correct_answer" required>
                            <option value="" disabled selected>Select the correct answer</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="submit-btn">Submit Question</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
