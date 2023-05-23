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
                <h2 class="my-2 mx-0 text-center">{!! $title !!}</h2>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Blog Section ======= -->

    <section class="section my-5">
        <div class="container">
            <div class="row m-3">

                @forelse($categories as $category)

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-entry mx-4">
                            <a href="{{ route('blog.by.category', ['selected' => $category->id]) }}">
                                <div class="card shadow text-black">
                                    <div class="card-body pt-4 text-center">
                                        <h2 class="h5 fw-bold">{{ $category->nama_kategori }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                @empty
                    <h1>empty</h1>
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
