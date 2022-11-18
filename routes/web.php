<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/delete/{$id}', [App\Http\Controllers\HomeController::class,'delete'])->name('delete');
Route::get('/update', [App\Http\Controllers\HomeController::class, 'store'])->name('update');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');