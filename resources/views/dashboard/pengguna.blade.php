<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Pengguna</h1>
        <div class="d-flex align-items-center mb-4">
            <div class="border border-secondary rounded-pill px-3 py-2 me-3">
                <span class="fw-bold"> Total Pengguna</span>
                <span class="ms-2">1 Orang</span>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahPenggunaBaru">
                + Tambah Pengguna Baru
            </button>
        </div>

        <div class="p-4 border border-dark rounded-5 ">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Sofyan Faiz</td>
                        <td>sofyan.faiz@gmail.com</td>
                        <td>
                            <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                data-bs-target="#editPengguna">Edit</button>
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                data-bs-target="#hapusPengguna">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="modal fade p-4 py-md-5" tabindex="-1" id="tambahPenggunaBaru">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Tambah Data Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="" method="POST" class="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput"
                                    placeholder="Nama Lengkap">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Alamat Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Tambah Pengguna
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade p-4 py-md-5" tabindex="-1" id="editPengguna">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Edit Data Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="" method="POST" class="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput"
                                    placeholder="Nama Lengkap" value="Sofyan Faiz">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput"
                                    placeholder="name@example.com" value="sofyan.faiz@gmail.com">
                                <label for="floatingInput">Alamat Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Edit Pengguna
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade p-4 py-md-5" tabindex="-1" role="dialog" id="hapusPengguna">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <h5 class="mb-0">Hapus Sofyan Faiz?</h5>
                        <p class="mb-0">Kamu tidak dapat mengembalikan data ini.</p>
                    </div>
                    <div class="modal-footer flex-nowrap p-0">
                        <button type="button"
                            class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end"><strong>Ya,
                                hapus</strong></button>
                        <button type="button"
                            class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0"
                            data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
