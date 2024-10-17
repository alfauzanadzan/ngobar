<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TamuController;

//ini adalah controller ngobar
use App\Http\Controllers\NgobarController;

Route::get('/', function () {
    return view('welcome');
});
// contoh route memakai method get
// Route::get('', function () {
    // return view('ngobars.index')
// });
Route::resource('ngobars', NgobarController::class);