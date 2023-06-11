<nav class="navbar navbar-dark main-nav navbar-expand-lg" style="background-color: #2F4A42;">
    <div class="container">
        <a href="/dashboard" class="navbar-brand fw-semibold">
            Dashboard
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dropdown-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                @switch(Illuminate\Support\Facades\Auth::user()->tipe_akun)
                    @case(0)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pengelolaan Sampah
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('sampah.home') }}">Data Sampah</a></li>
                                <li><a class="dropdown-item" href="{{ route('sampah.kategori.home') }}">Daftar Kategori Sampah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('blog.list') }}">Daftar Blog</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog.kategori.home') }}">Daftar Kategori Blog</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('nasabah.list') }}" class="nav-link">Nasabah Anda</a>
                        </li>

                        @break
                    @case(1)
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard/saldo">Riwayat Saldo</a>
                        </li>

                    @break
                    @case(2)
                        <li class="nav-item">
                            <a href="{{ route('admin.homepage.update.form') }}" class="nav-link">Ubah Halaman Depan</a>
                        </li>
                    @break
                @endswitch
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link">Profil</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
