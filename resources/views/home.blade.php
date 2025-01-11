<x-layout title="Home | Lagoa Express">
    <style>
        .background {
            width: 100%;
            min-height: 50vh;
            background:
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset('img/background kereta.jpg') }}') no-repeat;
        }
    </style>
    <div class="d-flex align-items-center background">
        <div class="mx-5">
            <div class="d-block">
                <h3 class="text-white mt-5 pt-5">Hai, Kamu!</h3>
                <p class="fs-3 text-white">Mau kemana kita?</p>
            </div>
            <div class="card bg-white shadow-lg position-absolute" style="width: 85vw;">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-3">
                                <label class="fw-bold text-secondary mb-2" for="asal_kota">Kota Asal</label>
                                <div class="input-group">
                                    <i class="bi bi-train-front input-group-text fs-5 text-primary"></i>
                                    <input type="text" id="asal_kota" name="asal_kota"
                                        class="form-control border-dark-subtle">
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="fw-bold text-secondary mb-2" for="kota_tujuan">Kota Tujuan</label>
                                <div class="input-group">
                                    <i class="bi bi-train-front input-group-text fs-5 text-primary"></i>
                                    <input type="text" id="kota_tujuan" name="kota_tujuan"
                                        class="form-control border-dark-subtle">
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="fw-bold text-secondary mb-2" for="tanggal_berangkat">Tanggal
                                    Berangkat</label>
                                <div class="input-group">
                                    <i class="bi bi-calendar-event input-group-text fs-5 text-primary"></i>
                                    <input type="date" id="tanggal_berangkat" name="tanggal_berangkat"
                                        class="form-control border-dark-subtle">
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="fw-bold text-secondary mb-2" for="jumlah_penumpang">Jumlah
                                    Penumpang</label>
                                <div class="input-group">
                                    <i class="bi bi-people input-group-text fs-5 text-primary"></i>
                                    <input type="number" id="jumlah_penumpang" name="jumlah_penumpang"
                                        class="form-control border-dark-subtle">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-4">Cari Kereta</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            @if ($trains->isEmpty())
                <div class="col">
                    <p class="text-center">Tidak ada kereta yang tersedia.</p>
                </div>
            @else
                @foreach ($trains as $train)
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-xl">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <div class="d-block">
                                            <a href="{{ url('pilih-kursi/' . $train->id_kereta) }}"
                                                class="text-primary fs-4 text-decoration-none fw-bold">{{ $train->nama_kereta }}</a>
                                            <p>Kelas Ekonomi</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 d-flex align-items-center">
                                        <div class="d-block">
                                            <div class="d-flex gap-4">
                                                <div class="d-block">
                                                    <p class="p-0 m-0 fs-6 text-secondary">
                                                        {{ \Carbon\Carbon::parse($train->waktu_keberangkatan)->format('d F') }}
                                                    </p>
                                                    <p class="p-0 m-0 fs-4 fw-semibold text-dark">
                                                        {{ \Carbon\Carbon::parse($train->waktu_keberangkatan)->format('H:i') }}
                                                        <i class="bi bi-train-front fs-5 text-primary"></i>
                                                    </p>
                                                    <p class="text-secondary">
                                                        {{ $train->asal_kota }}
                                                    </p>
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        ━
                                                        <span class="mx-2">
                                                            {{ \Carbon\Carbon::parse($train->waktu_keberangkatan)->diffInHours(\Carbon\Carbon::parse($train->waktu_tiba)) }}
                                                            jam
                                                        </span>
                                                        ━
                                                    </div>
                                                </div>
                                                <div class="d-block">
                                                    <div class="d-block">
                                                        <div class="d-flex justify-content-end">
                                                            <span class="p-0 m-0 fs-6 text-secondary">
                                                                {{ \Carbon\Carbon::parse($train->waktu_tiba)->format('d F') }}
                                                            </span>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <p class="p-0 m-0 fs-4 fw-semibold text-dark">
                                                                <i class="bi bi-train-front fs-5 text-danger"></i>&nbsp;
                                                                {{ \Carbon\Carbon::parse($train->waktu_tiba)->format('H:i') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <p class="text-secondary">
                                                            {{ $train->kota_tujuan }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ url('pilih-kursi/' . $train->id_kereta) }}"
                                                    class="btn btn-outline-primary">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</x-layout>
