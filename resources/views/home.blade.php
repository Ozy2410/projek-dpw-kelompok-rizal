<x-layout title="Home | Lagoa Express">
    <style>
        .background {
            width: 100%;
            height: 400px;
            background:
                linear-gradient(rgba(55, 114, 101, 0.5), rgba(26, 82, 82, 0.055)),
                url('{{ asset('img/background kereta.jpg') }}') no-repeat;
            background-blend-mode: overlay;
        }
    </style>
    <div class="w-100 h-100 d-flex align-items-center background">
        <div class="mx-5">
            <div class="d-block">
                <h3 class="text-white mt-5 pt-5">Hai, Kamu!</h3>
                <p class="fs-3 text-white">Mau kemana kita?</p>
            </div>
            <div class="card bg-white mt-5" style="width: 80vw;">
                <div class="card-body">
                    {{-- <form action="" method="post"> --}}
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label class="fw-bold text-secondary" for="asal_kota">Asal Kota</label>
                            <div class="input-group">
                                <i class="bi bi-train-front input-group-text"></i>
                                <input type="text" id="asal_kota" name="asal_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="fw-bold text-secondary" for="kota_tujuan">Kota Tujuan</label>
                            <div class="input-group">
                                <i class="bi bi-train-front input-group-text"></i>
                                <input type="text" id="kota_tujuan" name="kota_tujuan" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="fw-bold text-secondary" for="tanggal_berangkat">Tanggal Berangkat</label>
                            <div class="input-group">
                                <i class="bi bi-calendar-event input-group-text"></i>
                                <input type="text" id="tanggal_berangkat" name="tanggal_berangkat"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-2">
                            <label class="fw-bold text-secondary" for="jumlah_penumpang">Jumlah
                                Penumpang</label>
                            <div class="input-group">
                                <i class="bi bi-people input-group-text"></i>
                                <input type="text" id="jumlah_penumpang" name="jumlah_penumpang"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary">Cari Kereta</button>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
