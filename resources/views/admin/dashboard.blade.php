@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row align-items-start">
    <div class="col-10">
      <h1>DAFTAR BUKU</h1>
    </div>
    <div class="col-2">
     <a href="/dashboard/create">
     <button type="button" class="btn btn-success">Tambah Buku</button>
     </a>
    </div>
  </div>
</div>
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
            <td><a href="/edit" class="pe-2">
                    <button type="button" class="btn btn-warning ">edit</button>
                </a>
                <a href="">
                    <button type="button" class="btn btn-danger p-1">hapus</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection