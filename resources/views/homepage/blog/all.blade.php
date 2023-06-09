<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/bootstrap-icons.css" rel="stylesheet">
    <link href="css/welcome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

@include('.homepage.common.header')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <h2 class="my-2 mx-0">{!! $title !!}</h2>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Blog Section ======= -->

    <section class="section my-5">
        <div class="container">
            <div class="row mb-5">

                <form id="search-form" class="my-3">
                    <input type="text" id="search-input" placeholder="Cari blog..." class="nosubmit">
                </form>


                @forelse($blogs as $blog)

                    <div class="col-md-4 mb-5">
                        <figure class="snip1218">
                            <div class="post-entry px-2">
                                <a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="d-block mb-4">
                                    <img src="{{ url('/images').'/'.$blog->image_header_url }}" alt="Image" class="img-fluid image">
                                </a>

                                <div class="post-text">
                                    <h3><a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="h5 fw-bold text-black">{{ $blog->judul_blog }}</a></h3>
                                    <span class="post-meta">oleh <span class="fw-normal text-black">{{ \App\Models\Unit::where('id', $blog->author)->first()->nama_unit }}</span> </span>
                                    <p><small><a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="readmore">Selengkapnya...</a></small></p>
                                </div>
                            </div>
                        </figure>
                    </div>

                @empty
                @endforelse
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    {{ $blogs->links() }}
                </div>
            </div>

        </div>

    </section>
    @include('.homepage.common.footer')

</main><!-- End #main -->
<script src="js/main.js"></script>
<script>
    // Menangkap elemen form dan input pencarian
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');

    // Fungsi untuk menangani pencarian
    const handleSearch = () => {
        // Ambil nilai input pencarian
        const searchTerm = searchInput.value.toLowerCase().trim();

        // Ambil semua elemen blog
        const blogItems = document.querySelectorAll('.post-entry');

        // Loop melalui setiap blog item dan periksa apakah sesuai dengan pencarian
        blogItems.forEach(function (blogItem) {
            const blogTitle = blogItem.querySelector('.post-text .h5').textContent.toLowerCase();

            // Jika judul blog cocok dengan pencarian, tampilkan item, jika tidak, sembunyikan
            if (blogTitle.includes(searchTerm)) {
                blogItem.style.display = 'block';
            } else {
                blogItem.style.display = 'none';
            }
        });
    };

    // Tambahkan event listener untuk input pencarian saat input berubah
    searchInput.addEventListener('input', handleSearch);

    // Tambahkan event listener untuk form pencarian saat submit
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah refresh halaman
    });
</script>
</body>

</html>
