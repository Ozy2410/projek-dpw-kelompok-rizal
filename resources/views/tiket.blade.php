<x-layout title="Tiket | Lagoa Express">
    <div class="container">
        <div class="container mt-5">
            <h2>Tiket Saya</h2>
            @if ($bookings->isEmpty())
                <p>Tidak ada tiket yang dipesan.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Kereta</th>
                            <th>Waktu Keberangkatan</th>
                            <th>Asal Kota</th>
                            <th>Tujuan Kota</th>
                            <th>Nomor Kursi</th>
                            <th>Gerbong</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->kereta->nama_kereta }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->kereta->waktu_keberangkatan)->format('d-m-Y H:i') }}
                                </td>
                                <td>{{ $booking->kereta->asal_kota }}</td>
                                <td>{{ $booking->kereta->kota_tujuan }}</td>
                                <td>{{ $booking->nomor_kursi }}</td>
                                <td>{{ $booking->gerbong }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-layout>
