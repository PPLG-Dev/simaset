<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ auth()->check() ? '/dashboard' : '/' }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="#register">Register</a>
                @endguest
                @auth
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    @if (auth()->user()->role === 'admin')
                        <a class="nav-link" href="#">Users</a>
                    @endif
                    <a class="nav-link" href="{{ route('tanah.index') }}">Tanah</a>
                    <a class="nav-link" href="{{ route('bangunan.index') }}">Bangunan</a>
                    <a class="nav-link" href="#">Ruangan</a>
                    <a class="nav-link" href="#">Kategori</a>
                    <a class="nav-link" href="#">Barang</a>
                @endauth
            </div>
            <div class="d-flex dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="https://placehold.net/avatar.png" class="" height="48" alt="Profile Image">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Preferences</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item" href="#">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
