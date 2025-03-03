<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/home', function () {
    return view('home');
});


