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
            <div id="play-menu-container pad-cus-1" class="play-menu-container">
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

                <!-- session -->
                @if (session('error'))
                <div style="color: red;">
                    {{ session('error') }}
                </div>
                @endif

                <!-- input name to session -->
                <form class="form-wrap" action="{{ route('home.saveName') }}" method="post">
                    @csrf
                    <input type="text" name="name" id="input-nickname-murid" class="input-nickname fade-in"
                        placeholder="Klik disini" />


                    <button type="submit" id="btn-nm-mulai" class="btn-nm btn-nm-mulai" role="button">
                        Mulai
                    </button>
                    <button id="btn-nm-batal" class="btn-nm btn-nm-batal" type="reset">
                        Batal
                    </button>
                </form>
            </div>
            <!-- ...... -->

            <!--  -->
        </section>

        <!-- footer -->
        <section class="footer-custom">
            <span>Sistem Multimedia</span>
            <a id="skph-link" href="" class="skph-link">TI - 7A</a>
        </section>
    </div>

    <!-- Background (Footer) -->
    <div class="bg-footer"></div>

    <!-- Background (Video) -->
    <video autoplay muted loop id="bg-halloween">
        <source id="bg-video" src="{{ asset('UI_QUIZ/assets/video/bg-main-murid2.mp4') }}" type="video/mp4" />
    </video>

    <audio loop autoplay muted>
        <source src="{{ asset('UI_QUIZ/assets/audio/doodle.mp3') }}" type="audio/mpeg" />
        <p>Audio tidak disupport browser</p>
    </audio>
    <script></script>

    <script src="{{ asset('UI_QUIZ/js/script.js') }}"></script>
</body>

</html>