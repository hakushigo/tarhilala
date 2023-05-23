@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-7 col-md-10 col-sm-12">
            <h1>
                Ubah kategori postingan blog
            </h1>
            <div class="d-flex justify-content-center">
                <form class="form-group py-5 col-11" method="post" action="{{ route('blog.kategori.action.update', ['id' => $id]) }}">
                    @csrf
                    <div class="mb-5">
                        <label for="jumlah">nama kategori postingan blog</label>
                        <input type="text" value="{{ $nama_kategori }}" min="0" name="nama_kategori" class="form-control" required>
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