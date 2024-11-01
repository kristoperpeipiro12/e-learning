<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{asset('UI_QUIZ/assets/images/logoSekolah.png')}}')}}" />
  <title>SKPH Quiz</title>
  <!-- <link rel="stylesheet" href="{{asset('UI_QUIZ/bootstrap/css/bootstrap.min.css')}}" /> -->
  <link rel="stylesheet" href="{{asset('UI_QUIZ/assets/icons/bootstrap-icons/font/bootstrap-icons.min.css')}}" />
  <link rel="stylesheet" href="{{asset('UI_QUIZ/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('UI_QUIZ/fontawesome-6.6.0/css/all.min.css')}}">
</head>

<body>
  <div class="section-wrap">
    <section class="navbar-custom">
      <div class="logo-sekolah-wrap">
        <a href="#" class="logo-sekolah">
          <img class="img-logo-nav" src="{{asset('UI_QUIZ/assets/images/logoSekolah.png')}}" alt="logo-sekolah" />
          <span>SKPH Quiz</span>
        </a>
      </div>
      <!-- <i class="bi bi-list menu-navbar"></i> -->
      <i id="pause-menu" class="fa-solid fa-bars menu-navbar"></i>
    </section>

    <!-- main content -->
    <section id="main-content-custom" class="main-content-custom">
      <div class="play-menu-container">
        <ul class="play-menu">
          <li><a href="#" id="btn-play-quiz" class="fs-icon-custom1"><i class="fa-regular fa-circle-play"></i>Play</a>
          </li>
          <li><a href="#" id="btn-leave-quiz" class="fs-icon-custom1"><i class="fa-solid fa-door-closed"></i><i
                class="fa-solid fa-door-open"></i>Keluar</a>
          </li>
        </ul>
      </div>
      <div id="bg-main-content" class="bg-main-content zoom-in"></div>
      <!-- area nickname -->
      <div id="nickname-container" class="nickname-container fade-in">
        <span>Masukkan Nama Anda</span>
        <input type="text" name="" id="" class="input-nickname fade-in">
        <button class="btn-nm btn-nm-mulai" role="button">Mulai</button>
        <button class="btn-nm btn-nm-batal" type="reset">Batal</button>
      </div>
      <!-- ...... -->
    </section>
    <section class="footer-custom"></section>
  </div>

  <!-- Pop Up Pause Menu -->
  <div class="pop-up-container" id="pop-up-container">
    <div class="black-area-pause" id="black-area-pause"></div>
    <div class="main-menu-custom" id="pop-up-menu">
      <video autoplay muted loop id="bg-pause">
        <source id="pause-video" src="{{asset('UI_QUIZ/assets/video/bg-pause-menu-murid.mp4')}}" type="video/mp4" />
      </video>
      <div class="menu-container">
        <div class="close-main-menu" id="x-pause-menu">
          <i class="bi bi-x-lg"></i>
        </div>
        <span class="menu-header">Pause</span>
        <ul>
          <a href="#" id="lanjut-menu">
            <li>Lanjut</li>
          </a>
          <a href="#" id="pengaturan-menu">
            <li>Pengaturan</li>
          </a>
          <a href="#" id="keluar-menu">
            <li>Keluar</li>
          </a>
        </ul>
      </div>
    </div>
  </div>

  <!-- Background (Video) -->
  <video autoplay muted loop id="bg-halloween">
    <source id="bg-video" src="{{asset('UI_QUIZ/assets/video/bg-main-murid.mp4')}}" type="video/mp4" />
  </video>

  <audio autoplay loop muted>
    <source src="{{asset('UI_QUIZ/assets/audio/doodle.mp3')}}" type="audio/mpeg" />
    <p>Audio tidak disupport browser</p>
  </audio>

  <script src="{{asset('UI_QUIZ/js/script.js')}}"></script>
</body>

</html>