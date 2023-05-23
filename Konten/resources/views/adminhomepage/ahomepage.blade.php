<!DOCTYPE html>
<html>
<head>
  <title>Form Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="web">Nama Web</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="web" name="web" placeholder="Nama Web"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="judul">Judul</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="judul_kecil">Judul Kecil</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="judul_kecil" name="judul_kecil" placeholder="Judul Kedua"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="sub_judul">Sub Judul</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sub_judul" name="sub_judul" placeholder="Sub Judul"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="gambar">Gambar</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="gambar" name="gambar">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
      </div>
    </div>

    <div class="form-group row justify-content-end">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
