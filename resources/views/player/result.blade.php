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
    <h1> ini halaman result </h1>
    <ul>
        <li>NA = {{ $nilai_akhir }}</li>
        <li>NA = {{ $jumlah_benar }}</li>
        <li>NA = {{ $jumlah_soal }}</li>
    </ul>
</body>

</html>
