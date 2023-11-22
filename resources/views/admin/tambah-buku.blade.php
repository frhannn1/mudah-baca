@extends('layouts.app')

@section('content')
<div class="container-sm"  style="max-width: 800px;">
    <h1 class="text-center">Tambah Buku</h1>
    <form action="/store" method="post">
        @csrf
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="judul-buku" placeholder="judul buku" name="nama">
  <label for="floatingInput">judul buku</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="kategori"  placeholder="kategori" name="kategory">
  <label for="floatingInput">kategori</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="penulis"  placeholder="penulis" name="penulis">
  <label for="floatingInput">Penulis</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="penerbit"  placeholder="penerbit" name="penerbit">
  <label for="floatingInput">Penerbit</label>
</div>
<div class="d-flex justify-content-center align-items-center">
    <input type="submit" name="submit" value="Tambah" class="btn btn-success" style="width: 150px;">
</div>
</form>
</div>

@endsection
