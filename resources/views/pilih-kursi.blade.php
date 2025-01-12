<x-layout title="Pilih Kursi | Lagoa Express">
    <div class="container mt-5">
        <h2>Pilih Kursi untuk Kereta {{ $train->nama_kereta }}</h2>
        <form action="{{ route('store-pilih-kursi', $train->id_kereta) }}" method="POST">
            @csrf
            <input type="hidden" name="id_kereta" value="{{ $train->id_kereta }}">
            <input type="hidden" name="id_user" value="{{ Auth::id() }}">

            @for ($i = 0; $i < $jumlahPenumpang; $i++)
                <hr class="my-4">
                <div class="form-floating mb-3">
                    <input type="text" placeholder="nomor kursi" class="form-control"
                        id="penumpang[{{ $i }}][nomor_kursi]"
                        name="penumpang[{{ $i }}][nomor_kursi]" required>
                    <label for="penumpang[{{ $i }}][nomor_kursi]" class="form-label">Nomor Kursi Penumpang
                        {{ $i + 1 }}</label>
                </div>
            @endfor

            <button type="submit" class="btn btn-primary">Pesan</button>
        </form>
    </div>
</x-layout>
