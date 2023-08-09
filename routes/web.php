<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\DashboardC;
use App\Http\Controllers\PesertaC;

Route::get('/', function () {
    return view('home');
});

//Route::get('/home', function () {
//    return view ('home');
//});

Route::get('home', [HomeC::class, 'index']);

Route::get('/about', function () {
    return view ('about');
});

Route::get('/contact', function () {
    return view ('contact');
});

Route::get('/admin', function () {
    return view ('admin');
});

Route::get('/admin2', function () {
    return view ('layout.content');
});

Route::get('dashboard', [DashboardC::class, 'index']);
Route::get('peserta', [PesertaC::class, 'index']);