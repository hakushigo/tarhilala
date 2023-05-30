<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
                <h2 class="my-2 mx-0">{!! $title !!}</h2>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Blog Section ======= -->

    <section class="section my-5">
        <div class="container">
            <div class="mb-5">

                @forelse($units as $unit)
                    <div class="d-flex justify-content-center align-content-center col-12">
                        <div class="post-entry px-2 col-lg-6 col-md-10 col-sm-12">
                            <div class="post-text">
                                <h1 class="h2">{{ $unit->nama_unit }}</h1>
                                <br>
                                <ul style="list-style: none">
                                    <li>
                                        <h2 class="h5">alamat bank sampah</h2>
                                        <p>{{ $unit->alamat_unit }}</p>
                                    </li>
                                    <li>
                                        <h2 class="h5">kecamatan asal bank sampah</h2>
                                        <p>{{ $unit->kecamatan_unit }}</p>
                                    </li>
                                    <li class="pt-4">
                                        <p>
                                            <small>
                                                <i>lihat cerita mereka <a href="{{ route('blog.by.author', ['selected' => $unit->id]) }}">disini</a></i>
                                            </small>
                                        </p>
                                    </li>
                                </ul>
                                <hr class="mt-5">
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center align-content-center col-12">
                        <div class="post-entry px-2 col-lg-6 col-md-10 col-sm-12">
                            <div class="post-text">
                                <h1>tidak ada</h1>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    {{ $units->links() }}
                </div>
            </div>

        </div>

    </section>
    @include('.homepage.common.footer')

</main><!-- End #main -->
<script src="../js/main1.js">
</script>

</body>

</html>
