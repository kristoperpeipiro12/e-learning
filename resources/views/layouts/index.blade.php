<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('UI_QUIZ/assets/images/logoSekolah.png') }}" />
    <title>SKPH Quiz</title>
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/assets/icons/bootstrap-icons/font/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/fontawesome-6.6.0/css/all.min.css') }}" />
</head>

<body>
    <div class="black-area-nickname" id="black-area-nickname"></div>
    <div class="section-wrap">
        <!-- navbar -->
        <section class="navbar-custom">
            <div class="logo-sekolah-wrap">
                <a href="#" class="logo-sekolah">
                    <img class="img-logo-nav" src="{{ asset('UI_QUIZ/assets/images/logoSekolah.png') }}"
                        alt="logo-sekolah" />
                    <span>SKPH Quiz</span>
                </a>
            </div>
        </section>

        <!-- main content -->
        <section id="main-content-custom" class="main-content-custom">
            <!-- area play-menu -->
            <div id="play-menu-container" class="play-menu-container">
                <ul class="play-menu">
                    <li>
                        <a href="#" id="btn-play-quiz" class="fs-icon-custom1"><i
                                class="fa-regular fa-circle-play"></i>Play</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" id="btn-leave-quiz" class="fs-icon-custom1"><i
                                class="fa-solid fa-door-closed"></i><i class="fa-solid fa-door-open"></i>Ruang Guru</a>
                    </li>
                </ul>
            </div>
            <!-- ...... -->

            <div id="bg-main-content" class="bg-main-content zoom-in"></div>

            <!-- area nickname -->
            <div id="nickname-container" class="nickname-container fade-in">
                <span class="masukkan-nama-span">Masukkan Nama Anda</span>
                <input type="text" name="" id="input-nickname-murid" class="input-nickname fade-in"
                    placeholder="Klik disini" />

                <button id="btn-nm-mulai" class="btn-nm btn-nm-mulai" role="button"
                    onclick="window.location.href='{{ route('player.mapel') }}'">
                    Mulai
                </button>
                <button id="btn-nm-batal" class="btn-nm btn-nm-batal" type="reset">
                    Batal
                </button>
            </div>
            <!-- ...... -->

            <!--  -->
        </section>

        <!-- footer -->
        <section class="footer-custom">
            <span>copyright @ 2024</span>
            <a id="skph-link" href="" class="skph-link">Sekolah Kristen Pelita Hati</a>
        </section>
    </div>

    <!-- Background (Footer) -->
    <div class="bg-footer"></div>

    <!-- Background (Video) -->
    <video autoplay muted loop id="bg-halloween">
        <source id="bg-video" src="{{ asset('UI_QUIZ/assets/video/bg-main-murid.mp4') }}" type="video/mp4" />
    </video>

    <audio loop autoplay muted>
        <source src="{{ asset('UI_QUIZ/assets/audio/doodle.mp3') }}" type="audio/mpeg" />
        <p>Audio tidak disupport browser</p>
    </audio>
    <script></script>

    <script src="{{ asset('UI_QUIZ/js/script.js') }}"></script>
</body>

</html>
