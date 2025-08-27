<nav>
    <div>
        {{-- @guest --}}
            <a href="#login">Login</a>   
            <a href="#register">Register</a>   
        {{-- @endguest
        @auth --}}
            <a href="#user">Users</a>
            <a href="{{ route('tanah.index') }}">Tanah</a>
            <a href="#bangunan">Bangunan</a>
            <a href="#ruangan">Ruangan</a>
            <a href="#kategori">Kategori</a>
            <a href="#barang">Barang</a>
        {{-- @endauth --}}
    </div>
</nav>
