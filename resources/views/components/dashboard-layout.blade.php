<x-main title="{{ $title ?? 'Lagoa Express' }}">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar for desktop -->
            <div class="d-none d-md-block col-md-auto position-fixed bg-light sticky-top">
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
                            <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">
                                        Sign out
                                    </button>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Navbar for tablet and smaller screens -->
            <nav class="navbar navbar-expand-md navbar-light bg-light d-md-none sticky-top position-sticky">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/logo lagoa express.png') }}" width="32" height="32"
                            alt="Lagoa Express">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard-pengguna') ? 'active' : '' }}"
                                    href="{{ url('dashboard-pengguna') }}">Dashboard Pengguna</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard-kereta') ? 'active' : '' }}"
                                    href="{{ url('dashboard-kereta') }}">Dashboard Kereta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard-booking') ? 'active' : '' }}"
                                    href="{{ url('dashboard-booking') }}">Dashboard Booking</a>
                            </li>
                        </ul>
                        @auth
                            <div class="dropdown">
                                <a href="#"
                                    class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('img/pfp.jpg') }}" alt="mdo" width="32" height="32"
                                        class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small shadow">
                                    <form action="{{ url('logout') }}" method="post">
                                        @csrf
                                        <li>
                                            <button type="submit" class="dropdown-item">
                                                Sign out
                                            </button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>

            <div class="col p-0 min-vh-100">
                <!-- content -->
                {{ $slot }}
            </div>
        </div>
    </div>
</x-main>
