<x-layout title="Tiket | Lagoa Express">
    <div class="container">
        <div class="container mt-5">
            <h2>Tiket Saya</h2>
            @if ($bookings->isEmpty())
                <p>Tidak ada tiket yang dipesan.</p>
            @else
                @foreach ($bookings as $booking)
                    <div class="card m-5"
                        style="border-radius: 25px;border-style: none;padding-right: 25px; max-width: 70%; min-width: 50%">
                        <div class="d-flex flex-row justify-content-between"
                            style="background: #06555c;border-radius: 0px;border-top-left-radius: 25px;border-top-right-radius: 25px;">
                            <div>
                                <p class="mb-0 mt-3"
                                    style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: #cddae3;">
                                    ID Booking</p>
                                <p
                                    style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg);">
                                    {{ $booking->id_booking }}</p>
                            </div>
                            <div>
                                <p class="mb-0 mt-3"
                                    style="padding-top: 0px;padding-right: 30px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg); text-align:end">
                                    <span style="color: #cddae3;">Seat</span> {{ $booking->nomor_kursi }}
                                </p>
                                <p
                                    style="padding-top: 0px;padding-right: 30px;padding-bottom: 1px;padding-left: 30px;color: var(--bs-body-bg); text-align:end">
                                    <span style="color: #cddae3;">Gerbong</span> {{ $booking->gerbong }}
                                </p>
                            </div>
                        </div>
                        <div class="card-body"
                            style="background-color:rgba(205, 217, 213, 0.573); border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">
                            <div class="d-flex flex-row justify-content-between" style="">
                                <div>
                                    <p class="text-uppercase fw-bold"
                                        style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;">
                                        {{ $booking->kereta->nama_kereta }} </p>
                                    <p
                                        style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: #6B6A6A;">
                                        Economy Class</p>
                                </div>
                                <div>
                                    <p class="fw-bold"
                                        style="padding-top: 0px;padding-right: 30px;padding-bottom: 0px;padding-left: 30px; text-align:end">
                                        {{ \Carbon\Carbon::parse($booking->kereta->waktu_keberangkatan)->format('l, d F Y') }}
                                    </p>
                                    <p
                                        style="padding-top: 0px;padding-right: 30px;padding-bottom: 0px;padding-left: 30px;color: #6B6A6A; text-align:end">
                                        {{ $booking->user->nama }}</p>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center justify-content-center">
                                <div class="d-block">
                                    <p class="p-0 m-0 fs-4 fw-semibold text-dark">
                                        {{ \Carbon\Carbon::parse($booking->kereta->waktu_keberangkatan)->format('H:i') }}
                                        <i class="bi bi-train-front fs-5 text-primary"></i>
                                    </p>
                                    <p class="text-secondary">
                                        {{ $booking->kereta->asal_kota }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="d-flex align-items-center">
                                        ━
                                        <span class="mx-2">
                                            {{ \Carbon\Carbon::parse($booking->kereta->waktu_keberangkatan)->diffInHours(\Carbon\Carbon::parse($booking->kereta->waktu_tiba)) }}
                                            jam
                                        </span>
                                        ━
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="d-block">

                                        <div class="d-flex justify-content-end">
                                            <p class="p-0 m-0 fs-4 fw-semibold text-dark">
                                                <i class="bi bi-train-front fs-5 text-danger"></i>&nbsp;
                                                {{ \Carbon\Carbon::parse($booking->kereta->waktu_tiba)->format('H:i') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <p class="text-secondary">
                                            {{ $booking->kereta->kota_tujuan }}
                                        </p>
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
