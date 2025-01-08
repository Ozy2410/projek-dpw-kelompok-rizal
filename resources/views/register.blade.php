<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Lagoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center">
    <div class=" d-flex flex-column justify-content-center align-items-center"
        style="background: #00000000;width: 456px;height: 660px;color: var(--bs-emphasis-color);">
        <img src="{{ URL::asset('img/logo.png') }}" class="me-auto" width="100" height="80"
            style="height: 250px;width: 250px;">
        <h3 class="me-auto">Baru dateng? bikin akun dulu sini!</h3>
        <h6 class="me-auto" style="color: rgb(89,91,95);">Biar bisa lanjut menggunakan Lagoa Express</h6>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center ">
        <form class="justify-content-center shadow p-3" style="margin: 5px; width: 25vw">
            <div class="form-floating mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input class="form-control"type="text">
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>

            <hr>

            <div class="d-flex justify-content-center">
                Sudah punya akun?&nbsp;<a href="{{ route('login') }}" class="text-decoration-none">Login</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
