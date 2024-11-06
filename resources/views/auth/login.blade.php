<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>~Login Form~</title>
    <link rel="stylesheet" href="{{ asset('Tlogin/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <img src="{{ asset('Tlogin/logo.png') }}" alt="Logo" class="logo">

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="input-field password-toggle">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
                <i class="fas fa-eye" id="togglePassword"></i>
            </div>

            <button type="submit">Masuk</button>
            {{-- <div class="register">
                <p>Don't have an account? <a href="#">hubungi admin</a></p>
            </div> --}}
        </form>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {

            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

    </script>

</body>
</html>
