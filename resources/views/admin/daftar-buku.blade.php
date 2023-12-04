@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-10">
            <h1>DAFTAR BUKU</h1>
        </div>
        <div class="col-2">
            <a href="/daftar-buku/create">
                <button type="button" class="btn btn-success">Tambah Buku</button>
            </a>
        </div>
        <div>
        <form action="" method="GET" class="m-3">
        <input type="search" cl id="judul-buku" placeholder="cari judul buku" name="nama" style="border-radius: 6px;">
        
        <button type="submit" style="background-color: #015C92; color:white; border-radius:4px">Search</button>
    </form>
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
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ url('/daftar-buku/' . $item->id . '/edit') }}" class="p-1">
                        <button type="button" class="btn btn-warning text-decoration-none text-light">Edit</button>
                    </a>
                    <a href="{{ url('/'. $item->id . '/delete') }}" class="p-1" onclick="konfirmasiHapus('{{ $item->id }}')">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
                </div>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<script>
    function konfirmasiHapus(id) {
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            // Redirect ke URL hapus jika konfirmasi diterima
            window.location.href = id + '/delete';
        }
        event.preventDefault();
    }
</script>
@endsection
