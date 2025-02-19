@php
    $session = session()->all();

@endphp

<div>
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="container-fluid d-flex flex-row-reverse">
            <a class="navbar-brand" href="{{ url('/') }}">
                Stock Gudang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sidebar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <p class="fs-5 fw-bold">
                                Halo {{ $session['admin']['role'] }}!
                            </p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('supplier') }}">Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('transactions') }}">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('products') }}">products</a>
                        </li>

                        @if (!isset($session))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('login') }}">Login</a>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                            </li>
                        @endif
                        @if ($session['admin']['role'] == 'manager')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('register') }}">Register</a>
                            </li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
