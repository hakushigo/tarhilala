@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="d-flex justify-content-between">
                <h1 class="h2">Daftar Pengguna Nasabah</h1>
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="h5 fw-bold py-2 text-center">Daftar Nasabah Yang Belum Aktif</h2>
                    <table class="table mt-4">
                        <tr>
                            <th>
                                Nama Nasabah
                            </th>
                            <th>
                                Waktu Mendaftar
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                        @forelse($nasabah_inaktif as $ni)
                            <tr>
                                <td>
                                    {{ $ni->nama_nasabah }}
                                </td>
                                <td>
                                    {{ $ni->created_at }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('man.nasabah.detail', ['id' => $ni->id]) }}" class="btn btn-sm btn-primary">detail</a>
                                        <a href="{{ route('man.nasabah.activate', ['id' => $ni->id]) }}" class="btn btn-sm btn-success">aktifkan</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <p class="py-3 text-center">Tidak Ada Pengguna Disini</p>
                                </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>


            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="h5 fw-bold py-2 text-center">Daftar Nasabah Yang Sudah Aktif</h2>
                    <table class="table mt-4">
                        <tr>
                            <th>
                                Nama Nasabah
                            </th>
                            <th>
                                Waktu Mendaftar
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                        @forelse($nasabah_aktif as $na)
                            <tr>
                                <td>
                                    {{ $na->nama_nasabah }}
                                </td>
                                <td>
                                    {{ $na->created_at }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('man.nasabah.detail', ['id' => $na->id]) }}" class="btn btn-sm btn-primary">detail</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <p class="py-3 text-center">Tidak Ada Pengguna Disini</p>
                                </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('dashboard') }}" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>
@endsection
