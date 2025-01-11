<x-dashboard-layout title="Dashboard Kereta | Lagoa Express">
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Kereta</h1>
        <div class="d-flex align-items-center mb-4">
            <div class="border border-secondary rounded-pill px-3 py-2 me-3">
                <span class="fw-bold"> Total Kereta</span>
                <span class="ms-2">{{ $trains->count() }} Kereta</span>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahKeretaBaru">
                + Tambah Kereta Baru
            </button>
        </div>

        <div class="p-4 border border-dark rounded-5 ">
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kereta</th>
                        <th scope="col">Asal Kereta</th>
                        <th scope="col">Tujuan Kereta</th>
                        <th scope="col">Waktu Berangkat</th>
                        <th scope="col">Waktu Tiba</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $index => $train)
                        <tr>
                            <th scope="row">{{ ++$index }}</th>
                            <td>{{ $train->nama_kereta }}</td>
                            <td>{{ $train->asal_kota }}</td>
                            <td>{{ $train->kota_tujuan }}</td>
                            <td>{{ $train->waktu_keberangkatan }}</td>
                            <td>{{ $train->waktu_tiba }}</td>
                            <td>
                                <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editKereta{{ $train->id_kereta }}"><i
                                        class="bi bi-pencil-fill fs-5"></i></button>
                                <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#hapusKereta{{ $train->id_kereta }}"><i
                                        class="bi bi-trash3-fill fs-5"></i></button>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editKereta{{ $train->id_kereta }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-4 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h1 class="fw-bold mb-0 fs-2">Edit Data Kereta</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form action="{{ route('trains.update', $train->id_kereta) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="nama_kereta"
                                                    value="{{ $train->nama_kereta }}" required>
                                                <label for="floatingInput">Nama Kereta</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="asal_kota"
                                                    value="{{ $train->asal_kota }}" required>
                                                <label for="floatingInput">Asal Kereta</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="kota_tujuan"
                                                    value="{{ $train->kota_tujuan }}" required>
                                                <label for="floatingInput">Tujuan Kereta</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="datetime-local" class="form-control rounded-3"
                                                    name="waktu_keberangkatan"
                                                    value="{{ $train->waktu_keberangkatan }}" required>
                                                <label for="floatingInput">Waktu Berangkat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="datetime-local" class="form-control rounded-3"
                                                    name="waktu_tiba" value="{{ $train->waktu_tiba }}" required>
                                                <label for="floatingInput">Waktu Tiba</label>
                                            </div>
                                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                                Edit Kereta
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="hapusKereta{{ $train->id_kereta }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-3 shadow">
                                    <div class="modal-body p-4 text-center">
                                        <h5 class="mb-0">Hapus {{ $train->nama_kereta }}?</h5>
                                        <p class="mb-0">Kamu tidak dapat mengembalikan data ini.</p>
                                    </div>
                                    <div class="modal-footer flex-nowrap p-0">
                                        <form action="{{ route('trains.destroy', $train->id_kereta) }}" method="POST"
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

        <div class="modal fade p-4 py-md-5" tabindex="-1" id="tambahKeretaBaru">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Tambah Data Kereta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="{{ route('trains.store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="nama_kereta"
                                    placeholder="Nama Kereta" required>
                                <label for="floatingInput">Nama Kereta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="asal_kota"
                                    placeholder="Asal Kereta" required>
                                <label for="floatingInput">Asal Kereta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" name="kota_tujuan"
                                    placeholder="Tujuan Kereta" required>
                                <label for="floatingInput">Tujuan Kereta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control rounded-3"
                                    name="waktu_keberangkatan" required>
                                <label for="floatingInput">Waktu Berangkat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control rounded-3" name="waktu_tiba"
                                    required>
                                <label for="floatingInput">Waktu Tiba</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Tambah Kereta
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
