<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Lagucontroller;

Route::resource('lagu',Lagucontroller::class);