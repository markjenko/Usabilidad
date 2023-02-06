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

Route::resource('product', App\http\Controllers\ProductController::class)->middleware('auth');

Route::resource('client', App\http\Controllers\ClientController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/help', [App\Http\Controllers\HelpController::class, 'index'])->name('help');

Route::get('/support', [App\Http\Controllers\SupportController::class, 'index'])->name('support');