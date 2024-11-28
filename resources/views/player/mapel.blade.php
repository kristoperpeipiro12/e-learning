<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('UI_QUIZ/assets/images/logoSekolah.png') }}" />
    <title>SKPH Quiz</title>
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/assets/icons/bootstrap-icons/font/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/css/mapel.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/fontawesome-6.6.0/css/all.min.css') }}" />
</head>

<body>
    <!-- sudah beda file css -->
    <div class="content-area">
        <div class="content-container">
            <div class="mapel-container">
                <!-- MATEMATIKA -->
                <section class="lesson-container .lesson-math-hover">
                    <!-- <div class="shadow"><span>oke</span></div> -->
                    <div class="bg-wrap">
                        <a href="{{ route('player.play', ['mapel' => 'matematika']) }}">
                            <img src="{{ asset('UI_QUIZ/assets/images/bg-math.jpg') }}" alt="" />
                        </a>
                    </div>
                    <span class="title-lesson"
                        onclick="window.location.href='{{ route('player.play', ['mapel' => 'matematika']) }}'"
                        style="cursor: pointer;">
                        MATH
                    </span>

                </section>

                <!-- INGGIRS -->
                <section class="lesson-container .lesson-eng-hover">
                    <div class="bg-wrap">
                        <a href="{{ route('player.play', ['mapel' => 'inggris']) }}">
                            <img src="{{ asset('UI_QUIZ/assets/images/bg-english.jpg') }}" alt="" />
                        </a>
                    </div>
                    <span class="title-lesson"
                        onclick="window.location.href='{{ route('player.play', ['mapel' => 'inggris']) }}'"
                        style="cursor: pointer;">
                        ENGLISH
                    </span>

                </section>
            </div>
        </div>

        <!-- Background (Gambar) -->
        <img id="bg-mapel" src="{{ asset('UI_QUIZ/assets/images/bg-mapel.jpg') }}" alt="cloud-background" />
    </div>
    <script src="{{ asset('UI_QUIZ/js/script.js') }}"></script>
</body>

</html>