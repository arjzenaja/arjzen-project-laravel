<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index'); // merujuk ke file welcome.blade.php di folder resource/views
// });

// Route::get('/welcome', function () {
//     return view('welcome'); // merujuk ke file index.blade.php di folder resource/views
// });

Route::get('/about', function () {
    return view('about'); // meruju ke file about.blode.php di folder resoucre/viesw 
}); 

// Route::get('/login', function () {
//     return view('login'); // meruju ke file login.blode.php di folder resoucre/viesw 
// }); 
    
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');