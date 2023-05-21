<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/style.css'])
</head>

<body>

@include('.homepage.common.header')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <h2 class="m-0">daftar cerita kami</h2>
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
                                <img src="{{ url('/images').'/'.$blog->image_header_url }}" alt="Image" class="img-fluid">
                            </a>

                            <div class="post-text">
                                <p class="h5 fw-bold">Horas Adalah Seorang Wibu</p>
                                <span class="post-meta">oleh <span class="fw-normal text-black">{{ \App\Models\Unit::where('id', $blog->author)->first()->nama_unit }}</span> </span>
                                <p><small><a href="{{ route('blog.view', ['id' => $blog->id]) }}" class="readmore">Selengkapnya...</a></small></p>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse

            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group" aria-label="Pagination">
                        <button type="button" class="btn btn-primary active">1</button>
                        <a href="#" class="btn btn-primary">2</a>
                        <a href="#" class="btn btn-primary">3</a>
                        <a href="#" class="btn btn-primary">4</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

</main><!-- End #main -->
<script src="../js/main1.js">
</script>

</body>

</html>
