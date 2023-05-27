<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $jw }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/welcome.css'])

</head>

<body>

@include('.homepage.common.header')

<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>{{ $jh }}</h1>
                <h2>{{ $sjh }}</h2>
                <div>
                </div>
            </div>
        </div>
    </div>

</section>

<main id="main">
    <section id="about" class="about">

        <div class="container">
            <div class="text-center row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="content">
                        <h2>{{ $jk1 }}</h2>
                        <p>
                            {{ $sjk1 }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <img src="/homepage/{{ $gk1 }}" class="img-fluid first-content-image" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="values" class="values">

        <div class="container">

            <header class="section-header">
                <p>{{ $jk2 }}</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box">
                        <img src="/homepage/{{ $gk2sa }}" class="img-fluid second-content-images" alt="">
                        <h3>{{ $jk2sa }}</h3>
                        <p>{{ $sjk2sa }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <img src="/homepage/{{ $gk2sb }}" class="img-fluid second-content-images" alt="">
                        <h3>{{ $jk2sb }}</h3>
                        <p>{{ $sjk2sb }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <img src="/homepage/{{ $gk2sc }}" class="img-fluid second-content-images" alt="">
                        <h3>{{ $jk2sc }}</h3>
                        <p>{{ $sjk2sc }}</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="features" class="features">

        <div class="container">

            <header class="section-header">
                <p class="fw-bold">
                    {{ $jdb }}
                </p>
            </header>

            <div class="row text-center">

                    <div class="row align-self-center gy-4">

                        @forelse($currentBlog as $Blog)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{ route('blog.view', ['id' => $Blog->id]) }}" target="_blank" class="mx-3 my-5 card blog-item shadow">
                                    <img class="card-img" src="/images/{{ $Blog->image_header_url }}">
                                    <div class="card-body">
                                        <h3 class="h4 fw-bolder">{{ $Blog->judul_blog }}</h3>
                                        <p>
                                            <small class="font-italic mt-4"><i>oleh</i> <b>{{ \App\Models\Unit::where('id', $Blog->author)->first()->nama_unit }}</b> <i>dalam</i> <b>{{ \App\Models\KategoriBlog::where('id', $Blog->kategori)->first()->nama_kategori }}</b></small>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="#" class="card blog-item shadow">
                                    <div class="card-body">
                                        <h3 class="h4 fw-bolder">kami belum memiliki cerita</h3>
                                        <p>
                                            Mohon menunggu, akan datang di masa depan!
                                        </p>
                                    </div>
                                </a>
                            </div>

                        @endforelse
                    </div>

            </div>

        </div>

        </div>
        </div>

        </div>

    </section>

</main>

@include('.homepage.common.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>
