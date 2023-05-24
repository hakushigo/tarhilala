@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-7 col-md-10 col-sm-12">
            <h1>
                Form perubahan halaman depan website
            </h1>
            <div class="d-flex justify-content-center">
                <form class="form-group py-5 col-11" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push') }}">
                    @csrf
                    <div class="mb-5">
                        <label for="judul_website">Judul Website</label>
                        <input type="text" value="{{ $jw }}" min="0" name="judul_website" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="judul_header">Judul Header</label>
                        <input type="text" value="{{ $jh }}" min="0" name="judul_header" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_header">Subjudul Header</label>
                        <input type="text" value="{{ $sjh }}" min="0" name="subjudul_header" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <label for="judul_konten_1">Judul Konten 1</label>
                        <input type="text" min="0" value="{{ $jk1 }}" name="judul_konten_1" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_konten_1">Subjudul Konten 1</label>
                        <input type="text" value="{{ $sjk1 }}" min="0" name="subjudul_konten_1" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <p>
                            <span>Gambar Konten 1 Saat Ini</span><br>
                            <img src="{{ __('/homepage/'.$gk1) }}" height="200px">
                        </p>
                        <input type="file" min="0" name="gambar_konten_1" class="form-control">
                    </div>


                    <div class="mb-5">
                        <label for="judul_konten_2">Judul Konten 2</label>
                        <input type="text" value="{{ $jk2 }}" min="0" name="judul_konten_2" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <p>
                            <span>Gambar Konten 2 bagian pertama Saat Ini</span><br>
                            <img src="{{ __('/homepage/'.$gk2sa) }}" height="200px">
                        </p>
                        <input type="file" min="0" name="gambar_konten_2_sub_a" class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="judul_konten_2_sub_a">Judul Konten 2 bagian pertama</label>
                        <input type="text" value="{{ $jk2sa }}" min="0" name="judul_konten_2_sub_a" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_konten_2_sub_a">Subjudul Konten 2 bagian pertama</label>
                        <input type="text" value="{{ $sjk2sa }}" min="0" name="subjudul_konten_2_sub_a" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <p>
                            <span>Gambar Konten 2 bagian kedua Saat Ini</span><br>
                            <img src="{{ __('/homepage/'.$gk2sb) }}" height="200px">
                        </p>
                        <input type="file" min="0" name="gambar_konten_2_sub_b" class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="judul_konten_2_sub_b">Judul Konten 2 bagian kedua</label>
                        <input type="text" value="{{ $jk2sb }}" min="0" name="judul_konten_2_sub_b" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_konten_2_sub_b">Subjudul Konten bagian kedua</label>
                        <input type="text" value="{{ $sjk2sb }}" min="0" name="subjudul_konten_2_sub_b" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <p>
                            <span>Gambar Konten 2 bagian ketiga Saat Ini</span><br>
                            <img src="{{ __('/homepage/'.$gk2sc) }}" height="200px">
                        </p>
                        <input type="file" min="0" name="gambar_konten_2_sub_c" class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="judul_konten_2_sub_c">Judul Konten bagian ketiga</label>
                        <input type="text" value="{{ $jk2sc }}" min="0" name="judul_konten_2_sub_c" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_konten_2_sub_c">Subjudul Konten bagian ketiga</label>
                        <input type="text" value="{{ $sjk2sc }}" min="0" name="subjudul_konten_2_sub_c" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <label for="judul_daftar_blog">Judul Daftar Blog</label>
                        <input type="text" value="{{ $jdb }}" min="0" name="judul_daftar_blog" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <label for="judul_brand_footer">Judul Brand Footer</label>
                        <input type="text" value="{{ $jbf }}" min="0" name="judul_brand_footer" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="subjudul_brand_footer">Subjudul Brand Footer</label>
                        <input type="text" value="{{ $sjbf }}" min="0" name="subjudul_brand_footer" class="form-control" required>
                    </div>


                    <div class="mb-5">
                        <label for="profil_footer_alamat">Profil Footer Alamat</label>
                        <input type="text" value="{{ $pfa }}" min="0" name="profil_footer_alamat" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="profil_footer_nophone">Profil Footer Nomor Telepon</label>
                        <input type="text" value="{{ $pfnp }}" min="0" name="profil_footer_nophone" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="profil_footer_alamat_email">Profil Footer Alamat Email</label>
                        <input type="text" value="{{ $pfae }}" min="0" name="profil_footer_alamat_email" class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <input type="submit" value="Update Data" class="btn btn-success">
                        <a href="/dashboard" class="btn btn-secondary">Kembali ke Dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
