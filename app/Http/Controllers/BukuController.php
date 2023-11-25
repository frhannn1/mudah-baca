<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Ensure that the user is authenticated before accessing this controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display a list of books
    public function index()
    {
        $data_buku = Buku::all();
        return view('admin.daftar-buku',compact('data_buku'));

    }
    public function create(){
        return view('admin.tambah-buku');
    }
    public function store(Request $request){
        Buku::create($request->except(['_token','submit']));
        return redirect('/daftar-buku');
    }
    public function edit($id){
        $buku = Buku::find($id);
        return view('admin.edit-buku',compact(['buku']));
    }
    public function update($id, Request $request){
        $buku = Buku::find($id);
        $buku->update($request->except(['_token','submit']));
        return redirect('/daftar-buku');

    }
    public function destroy($id,){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/daftar-buku');
    }
}
