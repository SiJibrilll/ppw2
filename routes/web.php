<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
        return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'data' => 'ini contoh data'
    ]);
});

Route::get('/cards', [CardController::class, 'index'])->name('cards');

Route::resource('books', BookController::class);