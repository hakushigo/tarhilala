<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $jw }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
                    <img src="/homepage/{{ $gk1 }}" class="img-fluid" alt="">
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
                        <img src="/homepage/{{ $gk2sa }}" class="img-fluid" alt="">
                        <h3>{{ $jk2sa }}</h3>
                        <p>{{ $sjk2sa }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <img src="/homepage/{{ $gk2sb }}" class="img-fluid" alt="">
                        <h3>{{ $jk2sb }}</h3>
                        <p>{{ $sjk2sb }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <img src="/homepage/{{ $gk2sc }}" class="img-fluid" alt="">
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

            <div class="row">

                    <div class="row align-self-center gy-4">

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a href="#" class="card blog-item shadow">
                                <img class="card-img" src="/homepage/4.jpg">
                                <div class="card-body">
                                    <h3 class="h4 fw-bolder">pelatihan pembuangan sampah yang baik dan benar ke kampung bikini bottom oleh bank sampah chum bucket</h3>
                                    <br>
                                    <p>
                                        <small class="font-italic mt-4"><i>klik saya untuk membuka cerita</i></small>
                                    </p>
                                </div>
                            </a>
                        </div>


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

<script src="js/main.js"></script>

</body>

</html>
