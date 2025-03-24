<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', IndexController::class)->name('main.index');