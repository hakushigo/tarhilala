@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-between">
        <h1 class="h2 fw-bold">Log catatan sampah</h1>
        <a href="{{ route('sampah.tambah') }}" class="btn btn-success">catat sampah masuk</a></div>
    </div>
    <table class="table mt-5">
        <tr>
            <th>
                Tipe Sampah
            </th>
            <th>
                Jumlah
            </th>
            <th>
                Waktu data masuk
            </th>
            <th>
                Aksi
            </th>
        </tr>
    @forelse($TrashDatas as $data)
        <tr>
            <td>{{ \App\Models\TipeSampah::find($data->tipe_sampah)->nama_sampah }}</td>
            <td>{{ $data->amount }}</td>
            <td>{{ $data->created_at }}</td>
            <td>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">detail</a>
                    <a href="#" class="btn btn-warning">edit</a>
                    <a href="/dashboard/action/sampah/delete/{{ $data->id }}" class="btn btn-danger">hapus</a>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" style="text-align: center">
                <p>Belum ada catatan sampah!</p>
            </td>
        </tr>
    @endforelse
    </table>
@endsection
