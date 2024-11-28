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
    <style>
    .content-container {
        text-align: center;
    }

    .card-result {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .score-display {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin: 20px 0;
        animation: pop 0.5s ease-in-out;
    }

    @keyframes pop {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.5);
        }

        100% {
            transform: scale(1);
        }
    }
    </style>
</head>

<body>
    <div class="content-container">
        <div class="card-result">
            <h1>Hasil Quiz</h1>
            <div class="score-display" id="score">{{ $nilai_akhir }}</div>
            <ul>
                <li>Nickname Pemain: <span id="nilaiAkhir">{{ $username }}</span></li>
                <li>Nilai Akhir: <span id="nilaiAkhir">{{ $nilai_akhir }}</span></li>
                <li>Jumlah Benar: {{ $jumlah_benar }}</li>
                <li>Jumlah Salah: {{ $jumlah_soal - $jumlah_benar }}</li>
            </ul>
        </div>
    </div>

    <script>
    // Ambil nilai akhir dari server (nilai_akhir)
    const finalScore = {
        {
            $nilai_akhir
        }
    };
    const scoreElement = document.getElementById('score');
    let currentScore = 0;

    // Efek berhitung dari 0 ke nilai akhir
    const updateScore = () => {
        const interval = setInterval(() => {
            if (currentScore < finalScore) {
                currentScore++;
                scoreElement.textContent = currentScore;
                // Animasi pop setiap angka berubah
                scoreElement.style.animation = 'none';
                setTimeout(() => {
                    scoreElement.style.animation = '';
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