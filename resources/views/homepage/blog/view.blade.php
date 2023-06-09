<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail</title>

    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

@include('homepage.common.header')

<main id="main">
        <div class="container" id="view">
            <img class="col-12 blog-header-img" src="{{ url('/images').'/'.$blog->image_header_url }}">
            <div class="py-5 container text-left col-lg-7 col-md-10 col-md-12">
                <h1 class="blog-header-title">
                    {{ $blog->judul_blog }}
                </h1>

                <div class="blog-detail pt-3">
                    <p>oleh
                        <b>{{ $author }}</b>
                        dalam
                        <b>{{ $category }}</b>
                    </p>
                </div>

                    <hr>

                <div class="py-3 whole-blog-contents">
                    {!! $blog->content !!}
                </div>

            </div>
        </div><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<script src="../js/glightbox.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/glightbox.min.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

@include('.homepage.common.footer')
</body>

</html>
