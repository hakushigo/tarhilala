@php use App\Models\Unit; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog kami </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    @vite(['resources/css/style.css'])
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

                @forelse($blogs as $blog)

                    <div class="col-md-4 mb-5">
                        <div class="post-entry px-2">
                            <a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="d-block mb-4">
                                <img src="{{ url('/images').'/'.$blog->image_header_url }}" alt="Image"
                                     class="img-fluid">
                            </a>

                            <div class="post-text">
                                <a href="{{ route('blog.view', ['id' => $blog->id]) }}"
                                   class="h5 fw-bold text-black">{{ $blog->judul_blog }}</a>
                                <span class="post-meta">oleh <span
                                        class="fw-normal text-black">{{ Unit::where('id', $blog->author)->first()->nama_unit }}</span> </span>
                                <p><small><a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="readmore">Selengkapnya...</a></small>
                                </p>
                            </div>
                        </div>
                    </div>

                @empty
                    <div style="height: max-content" class="d-flex justify-content-center align-content-center">
                        miami
                    </div>
                @endforelse
            </div>

        </div>

    </section>
    @include('.homepage.common.footer')

</main><!-- End #main -->
<script src="../js/main1.js">
</script>

</body>

</html>
