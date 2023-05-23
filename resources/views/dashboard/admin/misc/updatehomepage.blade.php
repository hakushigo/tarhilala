@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-7 col-md-10 col-sm-12">
            <h1>
                Form perubahan informasi halaman depan
            </h1>
            <div class="d-flex justify-content-center">
                <form class="form-group py-5 col-11" enctype="multipart/form-data" method="post" action="{{ route('blog.kategori.action.push') }}">
                    @csrf
                    <div class="mb-5">
                        <label for="jumlah">{ini kau ganti}</label>
                        <input type="text" min="0" name="{ini juga}" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="jumlah">{well ini juga}</label>
                        <input type="file" min="0" name="{ini juga}" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <input type="submit" value="submit kategori" class="btn btn-success">
                        <a href="/dashboard" class="btn btn-secondary">kembali ke dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
