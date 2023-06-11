<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $jw }}</title>
  <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.3/dist/apexcharts.min.js"></script>

</head>

<body>
@include('.homepage.common.header')

  <section id="hero" class="hero d-flex align-items-center">

    <div class="carousel-item active" style="background-image: url(img/home.jpg)">
      <div class="carousel-container">
    <div class="container">
      <div class="row">
        <div class="d-flex flex-column justify-content-center">
          <h1>{{ $jh }}</h1>
          <h2>{{ $sjh }}</h2>
          <div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

  </section>

  <main id="main">
    <section id="about" class="about">

      <div class="container">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="content">
              <h3>{{ $jk1 }}</h3>
              <h2>{{ $sjk1 }}</h2>
              <p>
                {{ $sjk1sa }}
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center">
            <img src="/homepage/{{ $gk1 }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

    <section id="values" class="values">

      <div class="container">

        <header class="section-header">
          <h2>{{ $jk2a }}</h2>
          <p> {{ $jk2b }} </p>
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
          <p>{{ $jk3 }}</p>
        </header>

        <div class="row">

          <div class="d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3sa }}</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3sb }}</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3sc }}</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3sd }}</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3se }}</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $jk3sf }}</h3>
                </div>
              </div>

            </div>
          </div>

        </div>

          </div>

        </div>
      </div>

      </div>

    </section>

    <section id="statistic" class="statistic">
        <div class="container">
            <div class="section-header">
                <p>Laporan Sampah</p>
            </div>

            <div class="row gy-4">
                 @include('homepage.chart.chart')
              <div id="chart"></div>
            </div>

        </div>
    </section>

    <section id="services" class="services sections-bg">
      <div class="container">

        <div class="section-header">
          <p>{{ $jk4 }}</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3>{{ $jk4sa }}</h3>
              <p>{{ $sk4sa }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>{{ $jk4sb }}</h3>
              <p>{{ $sk4sb }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>{{ $jk4sc }}</h3>
              <p>{{ $sk4sc }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>{{ $jk4sd }}</h3>
              <p>{{ $sk4sd }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>{{ $jk4se }}</h3>
              <p>{{ $sk4se }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>{{ $jk4sf }}</h3>
              <p>{{ $sk4sf }}</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
          <p>{{ $jdb }}</p>
        </div>
        <div class="row text-center">

                    <div class="row align-self-center gy-4">

                        @forelse($currentBlog as $Blog)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{ route('blog.view', ['id' => $Blog->id]) }}" target="_blank" class="mx-3 my-5 card blog-item shadow">
                                    <img class="card-img" src="/images/{{ $Blog->image_header_url }}">
                                    <div class="card-body">
                                        <h5 class="h6 fw-bolder" style="color: black">{{ $Blog->judul_blog }}</h5>
                                        <p>
                                            <small class="font-italic mt-4" style="color: black"><i>oleh</i> <b>{{ \App\Models\Unit::where('id', $Blog->author)->first()->nama_unit }}</b> <i>dalam</i> <b>{{ \App\Models\KategoriBlog::where('id', $Blog->kategori)->first()->nama_kategori }}</b></small>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="#" class="card blog-item shadow" style="color:black">
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
    </section>

  </main>

@include('.homepage.common.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <script src="{{ asset('js/main.js') }}"></script>
 <script src="{{ asset('js/chart.js') }}"></script>



</body>

</html>
