<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/welcome', function () {
    return view('welcome'); // merujuk ke file index.blade.php di folder resource/views
});
Route::get('/about', function () {
    return "Tentang Que"; 
});
    