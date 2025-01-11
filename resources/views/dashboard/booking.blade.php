<x-dashboard-layout title="Dashboard Booking | Lagoa Express">
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Booking</h1>
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
                <span class="fw-bold"> Total Booking Tiket</span>
                <span class="ms-2">{{ $bookings->count() }} Orang</span>
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
                        <th scope="col">User</th>
                        <th scope="col">Kereta</th>
                        <th scope="col">Nomor Kursi</th>
                        <th scope="col">Gerbong</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <th scope="row">{{ $booking->id_booking }}</th>
                            <td>{{ $booking->user->nama }}</td>
                            <td>{{ $booking->kereta->nama_kereta }}</td>
                            <td>{{ $booking->nomor_kursi }}</td>
                            <td>{{ $booking->gerbong }}</td>
                            <td>
                                <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editBooking{{ $booking->id_booking }}"><i
                                        class="bi bi-pencil-fill fs-5"></i></button>
                                <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#hapusBooking{{ $booking->id_booking }}"><i
                                        class="bi bi-trash3-fill fs-5"></i></button>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editBooking{{ $booking->id_booking }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-4 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h1 class="fw-bold mb-0 fs-2">Edit Data Booking</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form action="{{ route('bookings.update', $booking->id_booking) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-floating mb-3">
                                                <select name="id_user" class="form-control rounded-3">
                                                    <option value="" disabled>Pilih User</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id_user }}"
                                                            {{ $booking->id_user == $user->id_user ? 'selected' : '' }}>
                                                            {{ $user->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">User</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select name="id_kereta" class="form-control rounded-3">
                                                    <option value="" disabled>Pilih Kereta</option>
                                                    @foreach ($trains as $train)
                                                        <option value="{{ $train->id_kereta }}"
                                                            {{ $booking->id_kereta == $train->id_kereta ? 'selected' : '' }}>
                                                            {{ $train->nama_kereta }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Kereta</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="nomor_kursi"
                                                    value="{{ $booking->nomor_kursi }}" required>
                                                <label for="floatingInput">Nomor Kursi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="gerbong"
                                                    value="{{ $booking->gerbong }}" required>
                                                <label for="floatingInput">Gerbong</label>
                                            </div>
                                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                                Edit Booking
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="hapusBooking{{ $booking->id_booking }}" tabindex="-1">
                            <form action="{{ route('bookings.destroy', $booking->id_booking) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content rounded-3 shadow">
                                        <div class="modal-body p-4 text-center">
                                            <h5 class="mb-0">Hapus Booking {{ $booking->id_booking }}?</h5>
                                            <p class="mb-0">Kamu tidak dapat mengembalikan data ini.</p>
                                        </div>
                                        <div class="modal-footer flex-nowrap p-0">
                                            <button type="submit"
                                                class="btn btn-lg btn-link fs-6 text-decoration-none py-3 m-0 rounded-0 border-end"><strong>Ya,
                                                    hapus</strong></button>
                                            <button type="button"
                                                class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0"
                                                data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
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
                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <select name="id_user" class="form-control rounded-3" required>
                                    <option value="" disabled selected>Pilih User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id_user }}">{{ $user->nama }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingInput">User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="id_kereta" class="form-control rounded-3" required>
                                    <option value="" disabled selected>Pilih Kereta</option>
                                    @foreach ($trains as $train)
                                        <option value="{{ $train->id_kereta }}">{{ $train->nama_kereta }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingInput">Kereta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="nomor_kursi"
                                    placeholder="Nomor Kursi" required>
                                <label for="floatingInput">Nomor Kursi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="gerbong"
                                    placeholder="Gerbong" required>
                                <label for="floatingInput">Gerbong</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Tambah Booking
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
