<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('UI_QUIZ/assets/images/logoSekolah.png') }}" />
    <title>SKPH Quiz - Result</title>
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/assets/icons/bootstrap-icons/font/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/css/result.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/fontawesome-6.6.0/css/all.min.css') }}" />

</head>

<body>
    <div class="content-container">
        <div class="card-result" id="card">
            <h1>Hasil Quiz</h1>
            <div class="score-display" id="score">{{ $nilai_akhir }}</div>
            <span class="username">{{ $username }}</span>
            <div class="wrap-tf">
                <span>Benar : {{ $jumlah_benar }}</span>
                <span>Salah : {{ $jumlah_soal - $jumlah_benar }}</span>
            </div>
            <a href="{{ route('home.index') }}" class="btn-selesai">Selesai</a>

        </div>
    </div>

    <video autoplay muted id="gs-wrap">
        <source id="gs-vid" src="{{ asset('UI_QUIZ/assets/video/bg-result.mp4') }}" type="video/mp4" />
    </video>

    <script>
        // Ambil nilai akhir dari server (nilai_akhir)
        const finalScore = {
            {
                $nilai_akhir
            }
        };
        const scoreElement = document.getElementById('score');
        const cardResult = document.getElementById('card');
        let currentScore = 0;

        // Efek berhitung dari 0 ke nilai akhir
        const updateScore = () => {
            const interval = setInterval(() => {
                if (currentScore < finalScore) {
                    currentScore++;
                    scoreElement.textContent = currentScore;
                    // Animasi pop setiap angka berubah
                    scoreElement.style.animation = 'none';
                    cardResult.style.animation = 'none';
                    setTimeout(() => {
                        scoreElement.style.animation = '';
                        cardResult.style.animation = '';
                    }, 50);
                } else {
                    clearInterval(interval);
                }
            }, 30); // Kecepatan update dalam milidetik
        };

        // Mulai efek saat halaman selesai dimuat
        window.onload = updateScore;
    </script>
</body>

</html>
