@extends('layouts.app')

@section('content')
<div class="container-fluid ms-4">
    <h1>DAFTAR BUKU</h1>
</div>
<form action="" method="GET">
<div class="container m-4">
  <div class="row align-items-start">
    <div class="col-4">
    <select class="form-select" aria-label="pilih kategori" name="kategory" id="kategory">
    <option value="">pilih kategori</option>
        @foreach($categories as $kategori)
            <option value="{{$kategori}}">{{$kategori}}</option>
        @endforeach
</select>
    </div>
    <div class="col-8">
        <div class="input-group">
            <input class="form-control me-3" name="judul" id="judul" type="search" placeholder="cari judul buku" style="max-width:50%;">
            <button type="submit" style="background-color: #015C92; color:white; border-radius:4px">Search</button>
        </div>
    </div>
</div>
</div>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Kategori</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php $nomer=0; @endphp
        @foreach($data_buku as $item)
        @php $nomer++; @endphp
        <tr>
            <th scope="row">{{ $nomer }}</th>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['kategory'] }}</td>
            <td>{{$item['penulis']}}</td>
            <td>{{$item['penerbit']}}</td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ url('/pinjam-buku/' . $item->id . '/daftar-pinjam') }}" class="p-1">
                        <button type="button" class="btn text-decoration-none text-light" style="background-color: #015C92;">Pinjam</button>
                    </a>

                    </a>
                </div>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
