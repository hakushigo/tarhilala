<div class="sidebar">

    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>

        @switch(Illuminate\Support\Facades\Auth::user()->tipe_akun)
            @case(0)
                <li class="nav-item">
                    <button class="nav-link dropdown-toggle text-black" data-bs-toggle="collapse" data-bs-target="#sampah-collapse" aria-expanded="true">
                        Pengelolaan Sampah
                    </button>
                    <div class="collapse" id="sampah-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="nav-item"><a class="nav-link" href="{{ route('sampah.home') }}">Data Sampah</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('sampah.kategori.home') }}">Daftar Kategori Sampah</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <button class="nav-link dropdown-toggle text-black" data-bs-toggle="collapse" data-bs-target="#cerita-collapse" aria-expanded="true">
                        Cerita
                    </button>
                    <div class="collapse" id="cerita-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="nav-item"><a class="nav-link" href="{{ route('cerita.list') }}">Daftar Cerita</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('cerita.kategori.home') }}">Daftar Kategori Cerita</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('nasabah.list') }}" class="nav-link">Nasabah Anda</a>
                </li>

                @break
            @case(1)
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/saldo">Riwayat Saldo Anda</a>
                </li>

                @break
            @case(2)
                <li class="nav-item">
                    <a href="{{ route('admin.homepage.update.form') }}" class="nav-link">Ubah Halaman Depan</a>
                </li>
                @break
        @endswitch

        <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link">Profil Anda</a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="nav-link text-black">Logout</button>
            </form>
        </li>
    </ul>

</div>
