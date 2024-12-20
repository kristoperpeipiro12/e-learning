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
            <i id="pause-menu" class="fa-solid fa-bars menu-navbar"></i>
        </section>

        <!-- soal -->
        <section id="main-content-custom" class="main-content-custom content-size-custom">
            <div id="soal-container" class="soal-container">
                <div class="nomor-isi-soal">
                    <!-- soal polos -->
                    <div class="con-nomor-btn">
                        <span id="nomor-soal" class="nomor-soal">{{ $nomor }}</span>
                        <button id="toggle-play">
                            <i class="fa-solid fa-volume-xmark" id="read-off"></i>
                            Baca
                        </button>
                    </div>
                    <div class="soal-polos">
                        <span id="isi-soal" class="isi-soal">{{ $isi_soal }}</span>
                    </div>

                    <!-- soal gambar -->
                    @if ($gambar != null)
                    <div class="soal-gambar"><img src="{{ asset('storage/' . $gambar) }}" alt="gambar-soal"
                            style="width: 220px">
                    </div>
                    @endif

                    <!-- soal video -->
                    @if ($video != null)
                    <div class="soal-video"><video controls src="{{ asset('storage/' . $video) }}"></video></div>
                    @endif

                </div>

                <!-- ... -->
                <form action="{{ route('soal.correction') }}" method="post">
                    @csrf
                    <div class="jawaban-wrap">
                        <ul>
                            <li>
                                <input type="radio" id="jawabanA" name="jawaban" value="a" required>
                                <label for="jawabanA">A. {{ $a }}</label>
                            </li>
                            <li>
                                <input type="radio" id="jawabanB" name="jawaban" value="b">
                                <label for="jawabanB">B. {{ $b }}</label>
                            </li>
                            <li>
                                <input type="radio" id="jawabanC" name="jawaban" value="c">
                                <label for="jawabanC">C. {{ $c }}</label>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn-soal btn-soal-jawab" type="submit">Jawab</button>
                        <button class="btn-soal btn-soal-hapus" type="reset">Hapus</button>
                    </div>
                </form>


            </div>
        </section>
    </div>

    <!-- Pop Up Pause Menu -->
    <div class="pop-up-container" id="pop-up-container">
        <div class="black-area-pause" id="black-area-pause"></div>
        <div class="main-menu-custom" id="pop-up-menu">
            <video muted loop id="bg-pause">
                <source id="pause-video" src="{{ asset('UI_QUIZ/assets/video/bg-pause-menu-murid.mp4') }}"
                    type="video/mp4" />
            </video>
            <div class="menu-container">
                <div class="close-main-menu" id="x-pause-menu">
                    <i class="bi bi-x-lg"></i>
                </div>
                <span class="menu-header">Pause</span>
                <ul>
                    <a href="#" id="lanjut-menu" class="lanjut">
                        <li>Lanjut</li>
                    </a>
                    <!-- <a href="#" id="pengaturan-menu">
                        <li>Pengaturan</li>
                    </a> -->
                    <a href="{{ route('home.index') }}" id="keluar-menu" class="keluar">
                        <li>Keluar</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <!-- Background (gambar) -->
    <img id="bg-halloween"
        src="{{ $mapel == 'mp_1' ? asset('UI_QUIZ/assets/images/bg-math-exercise-long.png') : asset('UI_QUIZ/assets/images/bg-english.png') }}"
        alt="" />

    <!-- Backsound -->
    <!-- <audio src="{{ asset('UI_QUIZ/assets/audio/doodle.mp3') }}" autoplay muted></audio> -->

    <script>
    window.addEventListener("load", () => {
        const audio = document.querySelector("audio");
        audio.muted = false;
    });
    </script>
    <script src="{{ asset('UI_QUIZ/js/script.js') }}"></script>
</body>

</html>