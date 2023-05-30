<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">{{ \App\Models\Homepage::find('judul_website')->value }}</a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dropdown-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicunitlist') }}">Daftar Bank Sampah</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blog.by.category') }}">Daftar Kategori Blog</a></li>
                        <li><a class="dropdown-item" href="{{ route('blog.by.author') }}">Daftar Penulis Blog</a></li>
                        <li><a class="dropdown-item" href="{{ route('blog.all') }}">Semua Blog</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
