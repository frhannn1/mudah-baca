<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-fluid" style="margin-top:4%;">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="/img/Group_15.png" alt="" style="width:68%;">
            </div>
            <div class="col-md-6">
                <div>
                    <h2>- The Best Online Books</h2>
                    <h1 style="font-size: 10vh; margin-top:5%;">Mudah Baca</h1>
                    <div style="max-width: 80%;">
                        <p>Aplikasi Mudah Baca adalah aplikasi yang dirancang untuk memudahkan
                            proses peminjaman buku secara online, menjadikan pengalaman membaca
                            lebih sederhana dan nyaman. Aplikasi ini mengintegrasikan fitur-fitur yang
                            memungkinkan pengguna untuk menjelajahi koleksi buku, meminjam, dan
                            mengembalikan buku dengan mudah. Berikut adalah beberapa fitur utama</p>
                    </div>

                    <button type="button" class="btn btn-primary ps-4 pe-4">See more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center mt-5">
        <H1 style="font-size: 10vh;">MUDAH BACA</H1>
        <h3 >--2023--</h3>
        <h6 style="margin-top: 30vh;">COPYRIGHT © 2023 MUDAH BACA</h6>
    </div>
    @endsection



    <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div> -->
</body>

</html>
