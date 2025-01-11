<x-main title="{{ $title }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary">
                    <a href="/"
                        class="d-flex justify-content-center align-items-center link-body-emphasis text-decoration-none mb-3"
                        data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Lagoa Express">
                        <img src="{{ asset('img/logo lagoa express.png') }}" width="64" height="64"
                            alt="">
                        <span class="visually-hidden">Lagoa Express</span>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                        <li class="nav-item">
                            <a href="{{ url('dashboard-pengguna') }}"
                                class="nav-link {{ Request::is('dashboard-pengguna') ? 'active' : '' }} py-3 border-bottom rounded-0"
                                aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Dashboard Pengguna" data-bs-original-title="Dashboard Pengguna">
                                @if (Request::is('dashboard-pengguna'))
                                    <i class="bi bi-person-fill-gear fs-5"></i>
                                @else
                                    <i class="bi bi-person-gear fs-5"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard-kereta') }}"
                                class="nav-link {{ Request::is('dashboard-kereta') ? 'active' : '' }} py-3 border-bottom rounded-0"
                                aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Dashboard Kereta" data-bs-original-title="Dashboard Kereta">
                                @if (Request::is('dashboard-kereta'))
                                    <i class="bi bi-train-front-fill fs-5"></i>
                                @else
                                    <i class="bi bi-train-front fs-5"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard-booking') }}"
                                class="nav-link {{ Request::is('dashboard-booking') ? 'active' : '' }} py-3 border-bottom rounded-0"
                                aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Dashboard Booking" data-bs-original-title="Dashboard Booking">
                                @if (Request::is('dashboard-booking'))
                                    <i class="bi bi-ticket-perforated-fill"></i>
                                @else
                                    <i class="bi bi-ticket-perforated"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown border-top">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/pfp.jpg') }}" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col p-0 min-vh-100">
                <!-- content -->
                {{ $slot }}
            </div>
        </div>
    </div>
</x-main>
