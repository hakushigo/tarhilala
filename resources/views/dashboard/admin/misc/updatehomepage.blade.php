@extends('dashboard.component.dashboard')
@section('dashboard.content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="h2">
                Ubah Informasi di Halaman Beranda
            </h1>

            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Judul Website
                        </h2>
                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'website_title']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label>Judul Website</label>
                                    <input type="text" value="" min="0" name="judul_website" class="form-control" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Isi Header
                        </h2>
                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'header']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label>Judul Header</label>
                                    <input type="text" value="" min="0" name="judul_header" class="form-control" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label>Sub-judul Header</label>
                                    <input type="text" value="" min="0" name="subjudul_header" class="form-control" required>
                                </div>
                                <div class="mb-3 mx-3">
{{--                                    <img class="col-12 rounded-1" style="height: 200px; width: auto" src="https://picsum.photos/1920/1080">--}}
{{--                                    <br><br>--}}
                                    <label>Sub-judul Header</label>
                                    <input type="file" value="" min="0" name="bgheader" class="form-control" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Bagian I Website
                        </h2>

                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'bagian_1']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label>Gambar Utama</label>
                                    <input type="file" value="" min="0" name="gambar_bagian_1" class="form-control" required>
                                </div>

                                <div class="mb-3 mx-3">
                                    <label>Judul Kecil</label>
                                    <input type="text" value="" min="0" name="judul_kecil_bagian_1" class="form-control" required>
                                </div>

                                <div class="mb-3 mx-3">
                                    <label>Judul Utama</label>
                                    <input type="text" value="" min="0" name="judul_bagian_1" class="form-control" required>
                                </div>

                                <div class="mb-3 mx-3">
                                    <label>Isi Teks Bagian I</label>
                                    <textarea rows="5" type="text" value="" min="0" name="konten_bagian_1" class="form-control" required>
                                    </textarea>
                                </div>

                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Bagian II Website
                        </h2>

                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'bagian_2']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label for="judul_kecil_bagian_2">Judul Kecil Bagian</label>
                                    <input type="text" value="" min="0" name="judul_kecil_bagian_2" class="form-control" required>
                                </div>

                                <div class="mb-3 mx-3">
                                    <label for="judul_bagian_2">Judul Bagian</label>
                                    <input type="text" value="" min="0" name="judul_bagian_2" class="form-control" required>
                                </div>

                                <div class="mx-3 mb-3">
                                    <button class="btn btn-success" type="button" onclick="addsectiononepart2()">tambahkan bagian konten!</button>
                                </div>

                                <div id="target-bagian-2"></div>

                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Bagian III Website
                        </h2>

                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'bagian_3']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label>Judul Bagian</label>
                                    <input type="text" value="" min="0" name="judul_bagian_3" class="form-control" required>
                                </div>

                                <div class="mx-3 mb-3">
                                    <button class="btn btn-success" type="button" onclick="addsectiononepart3()">tambahkan bagian konten!</button>
                                </div>

                                <div id="target-bagian-3"></div>

                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Bagian IV Website
                        </h2>

                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'bagian_4']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label for="judul_bagian_4">Judul Bagian</label>
                                    <input type="text" value="" min="0" name="judul_bagian_4" class="form-control" required>
                                </div>

                                <div class="mx-3 mb-3">
                                    <button class="btn btn-success" type="button" onclick="addsectiononepart4()">tambahkan bagian konten!</button>
                                </div>

                                <div id="target-bagian-4"></div>

                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4">
                <div class="card shadow-sm col-lg-10 col-md-12 col-sm-12 mt-4">
                    <div class="card-body">
                        <h2 class="h5 fw-bold text-center">
                            Isi Footer
                        </h2>
                        <div class="justify-content-center">
                            <form class="form-group py-3" enctype="multipart/form-data" method="post" action="{{ route('admin.homepage.update.push', ['section' => 'footer']) }}">
                                @csrf
                                <div class="mb-3 mx-3">
                                    <label>Judul</label>
                                    <input type="text" value="" min="0" name="judul_footer" class="form-control" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label>Sub-Judul</label>
                                    <input type="text" value="" min="0" name="subjudul_footer" class="form-control" required>
                                </div>
                                <div class="card mx-3 mb-3">
                                    <div class="card-body my-2">
                                        <div class="mx-3 mb-3">
                                            <h4>Detail anda</h4>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat</label>
                                            <input type="text" value="" min="0" name="alanat" class="form-control" required>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>No Telepon</label>
                                            <input type="text" value="" min="0" name="no_phone" class="form-control" required>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat Email</label>
                                            <input type="text" value="" min="0" name="email_addr" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mx-3 mb-3">
                                    <div class="card-body my-2">
                                        <div class="mx-3 mb-3">
                                            <h4>Informasi Sosial Media</h4>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat tautan Facebook</label>
                                            <input type="url" value="" min="0" name="fb" class="form-control" required>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat tautan Twitter</label>
                                            <input type="url" value="" min="0" name="twitter" class="form-control" required>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat tautan Instagram</label>
                                            <input type="url" value="" min="0" name="insta" class="form-control" required>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label>Alamat tautan Linkedin</label>
                                            <input type="url" value="" min="0" name="linkedin" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label>Catatan Hak Cipta</label>
                                    <input type="text" value="" min="0" name="catatan_hakcipta" class="form-control" required>
                                </div>

                                <div class="mb-3 mx-3">
                                    <input type="submit" value="Ubah" class="btn btn-success">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <template id="bagian-2-section-template">
        <div class="card mx-3 mb-3">
            <div class="card-body my-2">
                <div class="mb-3 mx-3">
                    <label>Judul Bagian</label>
                    <input type="text" value="" min="0" name="judul_konten_bagian_2[]" class="form-control" required>
                </div>
                <div class="mb-3 mx-3">
                    <label>Konten Bagian</label>
                    <textarea type="text" row="5" value="" min="0" name="isi_konten_bagian_2[]" class="form-control" required></textarea>
                </div>
                <div class="mb-3 mx-3">
                    {{--                    <img class="col-12 rounded-1" style="height: 200px; width: auto" src="https://picsum.photos/1920/1080">--}}
                    {{--                    <br><br>--}}
                    <label>Gambar Bagian</label>
                    <input type="file" value="" min="0" name="gambar_konten_bagian_2[]" class="form-control" required>
                </div>
            </div>
        </div>
    </template>

    <template id="bagian-3-section-template">
        <div class="card mx-3 mb-3">
            <div class="card-body my-2">
                <div class="mb-3 mx-3">
                    <label>Konten Bagian</label>
                    <input type="text" value="" min="0" name="konten_bagian_3[]" class="form-control" required>
                </div>
            </div>
        </div>
    </template>

    <template id="bagian-4-section-template">
        <div class="card mx-3 mb-3">
            <div class="card-body my-2">
                <div class="mb-3 mx-3">
                    <label>Judul Bagian</label>
                    <input type="text" value="" min="0" name="judul_konten_bagian_4[]" class="form-control" required>
                </div>
                <div class="mb-3 mx-3">
                    <label>Isi Bagian</label>
                    <textarea rows="5" value="" min="0" name="isi_konten_bagian_4[]" class="form-control" required></textarea>
                </div>
            </div>
        </div>
    </template>

    <script>
        function addsectiononepart2(){
            let template = document.querySelector('#bagian-2-section-template');
            let target = document.querySelector('#target-bagian-2');

            // first copy the template
            let template_copied = template.cloneNode(true)
            template_copied.class

            // append to the child
            target.appendChild(template_copied.content)
        }

        function addsectiononepart3(){
            let template = document.querySelector('#bagian-3-section-template');
            let target = document.querySelector('#target-bagian-3');

            // first copy the template
            let template_copied = template.cloneNode(true)
            template_copied.class

            // append to the child
            target.appendChild(template_copied.content)
        }

        function addsectiononepart4(){
            let template = document.querySelector('#bagian-4-section-template');
            let target = document.querySelector('#target-bagian-4');

            // first copy the template
            let template_copied = template.cloneNode(true)
            template_copied.class

            // append to the child
            target.appendChild(template_copied.content)
        }

    </script>
@endsection
