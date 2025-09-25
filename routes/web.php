<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;


Route::view('/', "iWelcome")->name('welcome');
Route::view('/home', "home")
    ->middleware([AuthMiddleware::class])
    ->name('home');

Route::get('/logout', function () {
    session()->forget('logged_user');
    return redirect()->route('welcome');
})->name('logout');
