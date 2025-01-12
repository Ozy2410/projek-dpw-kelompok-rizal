<x-layout title="Login | Lagoa Express">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <div class="login-container">
        <div class="left-section">
            <img src="{{ asset('img/logo.png') }}" alt="Lagoa Express Logo" class="logo">
            <h1>Langsung masuk aja!</h1>
            <p>Biar bisa lanjut make LAGOA EXPRESS</p>
        </div>
        <div class="right-section">
            <form class="login-form" action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button type="submit">Lanjut</button>

                <hr>


                <div class="d-flex justify-content-center">
                    Belum punya akun?&nbsp;<a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
