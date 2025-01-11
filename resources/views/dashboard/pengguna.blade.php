<x-dashboard-layout title="Dashboard Pengguna | Lagoa Express">
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Pengguna</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="d-flex align-items-center mb-4">
            <div class="border border-secondary rounded-pill px-3 py-2 me-3">
                <span class="fw-bold"> Total Pengguna</span>
                <span class="ms-2">{{ $users->count() }} Orang</span>
            </div>
            <button class="btn btn-primary rounded-none" type="button" data-bs-toggle="modal"
                data-bs-target="#tambahPenggunaBaru">
                + Tambah Pengguna Baru
            </button>
        </div>

        <div class="p-4 border border-dark rounded-5">
            <table class="table table-hover table-borderless">
                <thead class="">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editPengguna{{ $user->id_user }}"><i
                                        class="bi bi-pencil-fill fs-5"></i></button>
                                <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#hapusPengguna{{ $user->id_user }}"><i
                                        class="bi bi-trash3-fill fs-5"></i></button>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editPengguna{{ $user->id_user }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-4 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h1 class="fw-bold mb-0 fs-2">Edit Data Pengguna</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form action="{{ route('users.update', $user->id_user) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="nama"
                                                    value="{{ $user->nama }}" required>
                                                <label for="floatingInput">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control rounded-3" name="email"
                                                    value="{{ $user->email }}" required>
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-3" name="password"
                                                    placeholder="Password">
                                                <label for="floatingInput">Password (Kosongkan jika tidak ingin
                                                    mengubah)</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-3"
                                                    name="password_confirmation" placeholder="Konfirmasi Password">
                                                <label for="floatingInput">Konfirmasi Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select name="role" class="form-control rounded-3" required>
                                                    <option value="" disabled>Pilih Role</option>
                                                    <option value="admin"
                                                        {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="member"
                                                        {{ $user->role == 'member' ? 'selected' : '' }}>Member</option>
                                                </select>
                                                <label for="floatingInput">Role</label>
                                            </div>
                                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                                Edit Pengguna
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="hapusPengguna{{ $user->id_user }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-3 shadow">
                                    <div class="modal-body p-4 text-center">
                                        <h5 class="mb-0">Hapus Pengguna {{ $user->nama }}?</h5>
                                        <p class="mb-0">Kamu tidak dapat mengembalikan data ini.</p>
                                    </div>
                                    <div class="modal-footer flex-nowrap p-0">
                                        <form action="{{ route('users.destroy', $user->id_user) }}" method="POST"
                                            class="col-6">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-lg btn-link fs-6 text-decoration-none py-3 m-0 rounded-0 border-end"><strong>Ya,
                                                    hapus</strong></button>
                                        </form>
                                        <button type="button"
                                            class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tambah Modal -->
        <div class="modal fade p-4 py-md-5" tabindex="-1" id="tambahPenggunaBaru">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Tambah Data Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="nama"
                                    placeholder="Nama Lengkap" required>
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" name="email"
                                    placeholder="Email" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" name="password"
                                    placeholder="Password" required>
                                <label for="floatingInput">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" name="password_confirmation"
                                    placeholder="Konfirmasi Password" required>
                                <label for="floatingInput">Konfirmasi Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="role" class="form-control rounded-3" required>
                                    <option value="" disabled selected>Pilih Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="member">Member</option>
                                </select>
                                <label for="floatingInput">Role</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Tambah Pengguna
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-dashboard-layout>
