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
            <div class="card bg-white shadow-lg position-fixed" style="width: 85vw;">
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
</x-layout>
