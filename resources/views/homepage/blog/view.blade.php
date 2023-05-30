<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/style.css'])

</head>

<body>

@include('homepage.common.header')

<main id="main">
        <div class="container">
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

<script src="../js/main2.js"></script>

@include('.homepage.common.footer')
</body>

</html>
