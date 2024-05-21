<?php

use App\Http\Controllers\OutProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryInputController;
use App\Http\Controllers\HistoryOutputController;
use App\Http\Controllers\ReportProductController;
use App\Models\Product;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        return view('dashboard', [
            'products' => Product::all()
        ]);
    })->name('dashboard');
    //Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    // Product
    Route::resource('products', ProductController::class)->middleware('auth');
    Route::get('checkout/{product}',  [ProductController::class, 'payment'])->middleware('auth');
    //Route::resource('report', ProductController::class);
    Route::put('add-stok/{product}', [StokController::class, 'addStok'])->name('addStok')->middleware('auth');
    Route::get('histori-masuk', HistoryInputController::class)->name('histori-masuk')->middleware('auth');
    Route::get('histori-keluar', HistoryOutputController::class)->name('histori-keluar')->middleware('auth');
    // OutProduct
    Route::resource('report', ReportProductController::class)->middleware('auth');
    Route::resource('checkout', OutProduct::class)->middleware('auth');
    Route::post('bayar', [OutProduct::class, 'bayar'])->name('bayar')->middleware('auth');

    //User
    Route::put('profile/{user}', [UserController::class, 'update'])->middleware('auth');
    Route::resource('profile', UserController::class)->middleware('auth');
    Route::resource('edit', UserController::class);
});

require __DIR__ . '/auth.php';
