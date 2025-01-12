<x-main title="{{ $title ?? 'Lagoa Express' }}">

    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-block col-sm-auto position-fixed bg-light sticky-top min-vh-100">
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
                            <a href="{{ url('/') }}"
                                class="nav-link {{ Request::is('/') ? 'active' : '' }} py-3 border-bottom rounded-0"
                                aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                                data-bs-original-title="Home">
                                @if (Request::is('/'))
                                    <i class="bi bi-house-door-fill fs-5"></i>
                                @else
                                    <i class="bi bi-house-door fs-5"></i>
                                @endif
                            </a>
                        </li>
                        @member
                            <li>
                                <a href="{{ url('tiket') }}"
                                    class="nav-link {{ Request::is('tiket') ? 'active' : '' }} py-3 border-bottom rounded-0"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Tickets"
                                    data-bs-original-title="Tickets">
                                    @if (Request::is('tiket'))
                                        <i class="bi bi-ticket-perforated-fill fs-5"></i>
                                    @else
                                        <i class="bi bi-ticket-perforated fs-5"></i>
                                    @endif
                                </a>
                            </li>
                        @endmember
                        @admin
                            <li>
                                <a href="{{ url('dashboard-pengguna') }}" class="nav-link py-3 border-bottom rounded-0"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard Pengguna"
                                    data-bs-original-title="Dashboard Pengguna">
                                    <i class="bi bi-speedometer2 fs-5"></i>
                                </a>
                            </li>
                        @endadmin
                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                    class="nav-link {{ Request::is('login') || Request::is('request') ? 'active' : '' }}  py-3 border-bottom rounded-0"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Login"
                                    data-bs-original-title="Login">
                                    <i class="bi bi-box-arrow-in-right fs-5"></i>
                                </a>
                            </li>
                        @endguest
                    </ul>
                    @auth
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
                    @endauth
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
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                    href="{{ url('/') }}">Home</a>
                            </li>
                            @member
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('tiket') ? 'active' : '' }}"
                                        href="{{ url('tiket') }}">Tickets</a>
                                </li>
                            @endmember
                            @admin
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('dashboard-pengguna') }}">Dashboard Pengguna</a>
                                </li>
                            @endadmin
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('login') || Request::is('register') ? 'active' : '' }}"
                                        href="{{ route('login') }}">Login</a>
                                </li>
                            @endguest
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
            <div class="col p-0 min-vh-100" style="margin-left: 5vw">
                <!-- content -->
                {{ $slot }}
            </div>
        </div>
    </div>
</x-main>
