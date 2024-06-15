<?php

use App\Http\Controllers\SessionContrroller;
use App\Http\Controllers\TiketSampahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionContrroller::class, 'root'])->middleware('guest')->name('root');

Route::get('/login', function () {
    return view('login', [
        'page' => 'Login',
    ]);
})->middleware('guest');

Route::get('/register', function () {
    return view('register', [
        'page' => 'Register',
    ]);
})->middleware('guest');

Route::post('/login', [SessionContrroller::class, 'login'])->middleware('guest');
Route::post('/register', [SessionContrroller::class, 'register'])->middleware('guest');
Route::post('/logout', [SessionContrroller::class, 'logout'])->middleware('auth');

Route::get('/home', [TiketSampahController::class, 'index'])->middleware('auth');
Route::get('/pending', [TiketSampahController::class, 'pending'])->middleware('auth');
Route::get('/accept', [TiketSampahController::class, 'accept'])->middleware('auth');
Route::get('/add-ticket', [TiketSampahController::class, 'add'])->middleware('auth');
Route::post('/add-ticket', [TiketSampahController::class, 'store'])->middleware('auth');

Route::get('/edit-ticket/{tiket}', [TiketSampahController::class, 'edit'])->middleware('auth');
Route::post('/edit-ticket/{tiket}', [TiketSampahController::class, 'update'])->middleware('auth');
