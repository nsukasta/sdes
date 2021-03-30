<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/index');
});

Route::get('/about', function () {
    $nama = 'Suka Astawa';
    return view('/pages/about', ['nama' => $nama]);
});

Route::get('/contact', function () {
    $nama = 'Suka Astawa';
    return view('/pages/contact', ['nama' => $nama]);
});