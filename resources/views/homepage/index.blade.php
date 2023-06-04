<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $jw }}</title>
  <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

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
        <div class="col-lg-6 hero-img">
          <img src="img/1.png" class="img-fluid" alt="">
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
              <h3>HI TEMAN TARHILALA</h3>
              <h2>Yuk, mari kita bergabung untuk menabung sampah di bank sampah! Dengan menabung sampah, kita bisa membantu mengurangi jumlah sampah di lingkungan sekitar kita dan memberikan kontribusi positif bagi lingkungan serta bumi yang kita tempati.</h2>
              <p>
                Dengan menabung sampah, kita dapat membantu mendorong pengelolaan sampah yang lebih efektif dan berkelanjutan, sehingga sampah-sampah yang seharusnya berakhir di tempat pembuangan akhir dapat diolah menjadi bahan baku yang berguna untuk industri lainnya. Jadi, mari kita bersama-sama menjadi bagian dari solusi untuk mengatasi masalah sampah dan menjaga lingkungan kita agar tetap bersih dan sehat. Ayo, mulai menabung sampah di bank sampah sekarang juga!
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center">
            <img src="img/2.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

    <section id="values" class="values">

      <div class="container">

        <header class="section-header">
          <h2>3R</h2>
          <p> {{ $jk2 }} </p>
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
          <h2>Sampah ?</h2>
          <p>Jenis - Jenis Sampah</p>
        </header>

        <div class="row">

          <div class="d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah organik</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah kertas</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah plastik</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah logam</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah kaca</h3>
                </div>
              </div>

              <div class="col-md-6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sampah elektronik</h3>
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

    <section id="services" class="services sections-bg">
      <div class="container">

        <div class="section-header">
          <p>Mekanisme Bank Sampah</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3>1. Memilah sampah</h3>
              <p>Pisahkan sampah yang dapat didaur ulang dari sampah yang tidak dapat didaur ulang. Misalnya, pisahkan sampah organik, sampah plastik, sampah kertas, sampah logam, dan sebagainya.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>2. Membersihkan Sampah</h3>
              <p>Sebelum mengirim sampah ke bank sampah, pastikan untuk membersihkannya terlebih dahulu, terutama untuk sampah organik yang mudah membusuk.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>3. Memilah Berdasarkan Jenis</h3>
              <p>Setelah membersihkan sampah, pisahkan lagi berdasarkan jenisnya. Misalnya, pisahkan botol plastik dari kantong plastik. Hal ini juga akan memudahkan proses daur ulang sampah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>4. Mengompres Sampah</h3>
              <p>Jika memungkinkan, sebaiknya mengompres sampah terlebih dahulu agar ukuran sampah menjadi lebih kecil dan mudah untuk ditransportasi karena sampah yang sudah dikompresi akan meminimalkan kemungkinan tumpahan dan kebocoran saat diangkut.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>5. Menghubungi Bank Sampah</h3>
              <p>Sebelum mengirim sampah ke bank sampah, pastikan untuk menghubungi pihak bank sampah terlebih dahulu. Hal ini penting untuk mengetahui jenis sampah yang diterima dan jam operasionalnya agar proses pengiriman sampah berjalan dengan lancar.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <h3>6. Pemberian insentif</h3>
              <p>Setelah sampah diterima oleh pihak bank sampah maka sampah akan ditimbang dan dicatat, setelah itu akan diberikan insentif berupa uang atau hadiah sebagai bentuk apresiasi atas partisipasi mereka dalam program pengelolaan sampah yang baik</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main>

@include('.homepage.common.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
