
@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <h1>daftar nasabah</h1>
    <table class="table mt-4">
        <tr>
            <th>
                Kategori
            </th>
            <th>
                Aksi
            </th>
        </tr>
        @forelse($DaftarKategori as $kategori)
            <tr>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        @empty
            <h1>there's no nasabah here</h1>
        @endforelse
    </table>
@endsection
