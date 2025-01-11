<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Booking</h1>
        <div class="d-flex align-items-center mb-4">
            <div class="border border-secondary rounded-pill px-3 py-2 me-3">
                <span class="fw-bold"> Total Booking Tiket</span>
                <span class="ms-2">1 Orang</span>
            </div>
            <button class="btn btn-primary rounded-none" type="button" data-bs-toggle="modal"
                data-bs-target="#tambahBookingBaru">
                + Tambah Pemesanan Baru
            </button>
        </div>

        <div class="p-4 border border-dark rounded-5">
            <table class="table table-hover table-borderless">
                <thead class="">
                    <tr>
                        <th scope="col">ID Booking</th>
                        <th scope="col">ID User</th>
                        <th scope="col">ID Kereta</th>
                        <th scope="col">Nomor Kursi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>1</td>
                        <td>1</td>
                        <td>A1</td>
                        <td>
                            <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal"
                                data-bs-target="#editBooking">Edit</button>
                            <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                data-bs-target="#hapusBooking">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="modal fade p-4 py-md-5" tabindex="-1" id="tambahBookingBaru">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Tambah Data Booking</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="" method="POST" class="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control rounded-3" id="floatingInput"
                                    placeholder="ID Booking">
                                <label for="floatingInput">ID Booking</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control rounded-3" id="floatingInput"
                                    placeholder="ID User">
                                <label for="floatingInput">ID User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput"
                                    placeholder="Kursi">
                                <label for="floatingInput">Kursi</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Tambah Booking
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade p-4 py-md-5" tabindex="-1" id="editBooking">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Edit Data Booking</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="" method="POST" class="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control rounded-3" id="floatingInput"
                                    placeholder="ID Booking" value="1">
                                <label for="floatingInput">ID Booking</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control rounded-3" id="floatingInput"
                                    placeholder="ID User" value="1">
                                <label for="floatingInput">ID User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput"
                                    placeholder="Kursi" value="A1">
                                <label for="floatingInput">Kursi</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Edit Booking
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade p-4 py-md-5" tabindex="-1" role="dialog" id="hapusBooking">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="" method="post">
                    <input type="hidden" name="id" value="1">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body p-4 text-center">
                            <h5 class="mb-0">Hapus Kode Booking 1?</h5>
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
                </form>
            </div>
        </div>
    </div>
</x-layout>
