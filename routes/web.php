<?php

use App\Http\Controllers\HistoryInputController;
use App\Http\Controllers\HistoryOutputController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\OutProduct;
use App\Http\Controllers\ReportProductController;
use App\Http\Controllers\UserController;
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
})->middleware('guest');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Product
    Route::resource('products', ProductController::class);
    //Route::resource('report', ProductController::class);
    Route::put('add-stok/{product}', [StokController::class, 'addStok'])->name('addStok');
    Route::get('histori-masuk', HistoryInputController::class)->name('histori-masuk');
    Route::get('histori-keluar', HistoryOutputController::class)->name('histori-keluar');
    // OutProduct
    Route::resource('report', ReportProductController::class);
    Route::resource('checkout', OutProduct::class);
    // Route::resource('payment', OutProduct::class);

    //User
    Route::resource('profile', UserController::class);
});

require __DIR__ . '/auth.php';
