<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::namespace('App\Http\Controllers\Category')->prefix('categories')->group(function () {
    Route::get('/', IndexController::class)->name('category.index');
    Route::get('/create', CreateController::class)->name('category.create');
    Route::post('/', StoreController::class)->name('category.store');
    Route::patch('/{category}', UpdateController::class)->name('category.update');
    Route::delete('/{category}', DeleteController::class)->name('category.delete');
    Route::get('/{category}', ShowController::class)->name('category.show');
    Route::get('/{category}/edit', EditController::class)->name('category.edit');
});
Route::namespace('App\Http\Controllers\Tag')->prefix('tags')->group(function () {
    Route::get('/', IndexController::class)->name('tag.index');
    Route::get('/create', CreateController::class)->name('tag.create');
    Route::post('/', StoreController::class)->name('tag.store');
    Route::patch('/{tag}', UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', DeleteController::class)->name('tag.delete');
    Route::get('/{tag}', ShowController::class)->name('tag.show');
    Route::get('/{tag}/edit', EditController::class)->name('tag.edit');
});
Route::namespace('App\Http\Controllers\Color')->prefix('colors')->group(function () {
    Route::get('/', IndexController::class)->name('color.index');
    Route::get('/create', CreateController::class)->name('color.create');
    Route::post('/', StoreController::class)->name('color.store');
    Route::patch('/{color}', UpdateController::class)->name('color.update');
    Route::delete('/{color}', DeleteController::class)->name('color.delete');
    Route::get('/{color}', ShowController::class)->name('color.show');
    Route::get('/{color}/edit', EditController::class)->name('color.edit');
});
Route::namespace('App\Http\Controllers\User')->prefix('users')->group(function () {
    Route::get('/', IndexController::class)->name('user.index');
    Route::get('/create', CreateController::class)->name('user.create');
    Route::post('/', StoreController::class)->name('user.store');
    Route::patch('/{user}', UpdateController::class)->name('user.update');
    Route::delete('/{user}', DeleteController::class)->name('user.delete');
    Route::get('/{user}', ShowController::class)->name('user.show');
    Route::get('/{user}/edit', EditController::class)->name('user.edit');
});