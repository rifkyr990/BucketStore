<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('landing');
Route::get('dashboard', [App\Http\Controllers\ProductController::class, 'index'])->name('dashboard');
Route::get('create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::get('show/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');
Route::get('edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::put('edit/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
Route::delete('/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');
Route::post('/addproduct', [App\Http\Controllers\ProductController::class, 'addproduct'])->name('addproduct');

Route::get('allproduct', [App\Http\Controllers\ProductController::class, 'allproduct'])->name('allproduct');
Route::get('uang', [App\Http\Controllers\ProductController::class, 'uang'])->name('uang');
Route::get('snack', [App\Http\Controllers\ProductController::class, 'snack'])->name('snack');

Route::get('ganti/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'ganti'])->name('ganti');
Route::put('ganti/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'perbaharui'])->name('perbaharui');
Route::get('create/{product}', [App\Http\Controllers\ReservasiController::class, 'create'])->name('create');
Route::post('/addreserv/{product}', [App\Http\Controllers\ReservasiController::class, 'addreserv'])->name('addreserv');
Route::get('myorder', [App\Http\Controllers\ReservasiController::class, 'myorder'])->name('myorder');
Route::get('confirm', [App\Http\Controllers\ReservasiController::class, 'confirm'])->name('confirm');
Route::get('/reservasi/payment/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'payment'])->name('payment');
Route::post('/addconfirm', [App\Http\Controllers\ReservasiController::class, 'addconfirm'])->name('addconfirm');
Route::delete('/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'hapus'])->name('hapus');

Route::post('/remove/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'remove'])->name('remove');