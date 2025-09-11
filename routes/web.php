<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', function () {
        return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'data' => 'ini contoh data'
    ]);
});

Route::get('/cards', [CardController::class, 'index']);