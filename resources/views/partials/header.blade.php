
<nav class="navbar navbar-expand-lg bg-purple" data-bs-theme="dark">
    <div class="container">

        <!-- Brand / Logo -->
        <a class="navbar-brand" href="{{ route('pelanggans.index') }}">
            {{ config('app.name') }}
        </a>

        <!-- Tombol Hamburger -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTop"
            aria-controls="navbarTop"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse" id="navbarTop">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggans.index') }}">
                        Daftar Pelanggan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggans.create') }}">
                        Tambah Pelanggan
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>
