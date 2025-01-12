<x-layout title="Register | Lagoa Express">
    <div class="d-flex justify-content-center align-items-center">
        <div class=" flex-column justify-content-center align-items-center d-none d-md-flex"
            style="background: #00000000;width: 456px;height: 660px;color: var(--bs-emphasis-color);">
            <img src="{{ URL::asset('img/logo.png') }}" class="me-auto" width="100" height="80"
                style="height: 250px;width: 250px;">
            <h3 class="me-auto">Baru dateng? bikin akun dulu sini!</h3>
            <h6 class="me-auto" style="color: rgb(89,91,95);">Biar bisa lanjut menggunakan Lagoa Express</h6>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center ">
            <form method="POST" action="{{ route('register.post') }}" class="justify-content-center shadow p-3"
                style="margin: 5px; min-width: 25vw; max-width: 100vw">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                        required>
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>

                <hr>

                <div class="d-flex justify-content-center">
                    Sudah punya akun?&nbsp;<a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
