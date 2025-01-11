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
                            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                                data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                                data-bs-original-title="Home">
                                <i class="bi bi-house-door fs-5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Tickets" data-bs-original-title="Tickets">
                                <i class="bi bi-ticket-perforated fs-5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Login" data-bs-original-title="Login">
                                <i class="bi bi-box-arrow-in-right fs-5"></i>
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
