<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:admin')->get('/dashboard', function () {
    return redirect('daftar-buku');
})->name('dashboard');


Route::middleware('role:admin')->resource('daftar-buku', BukuController::class);
Route::middleware('role:admin')->post('/store', [BukuController::class,'store']);
Route::middleware('role:admin')->get('/{id}/edit' , [BukuController::class,'edit']);
Route::middleware('role:admin')->put('/{id}' , [BukuController::class,'update']);
Route::middleware('role:admin')->get('/{id}/delete' , [BukuController::class,'destroy']);

