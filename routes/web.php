<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Auth::routes(['register' => false, 'reset' => false, 'confirm' => false]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('{product}', [ProductController::class, 'show'])->name('show');
    });

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
    'as' => 'admin.',
], function () {
    Route::get('/', function () {
        return redirect()->route('admin.products.index');
    })->name('dashboard');

    Route::prefix('products')
        ->name('products.')
        ->group(function () {
            Route::get('/', [AdminProductController::class, 'index'])->name('index');
            Route::get('create', [AdminProductController::class, 'create'])->name('create');
            Route::get('init', [AdminProductController::class, 'init'])->name('init');
            Route::post('store', [AdminProductController::class, 'store'])->name('store');

            Route::prefix('{product}')->group(function () {
                Route::put('/', [AdminProductController::class, 'update'])->name('update');
                Route::get('edit', [AdminProductController::class, 'edit'])->name('edit');
                Route::get('delete', [AdminProductController::class, 'destroy'])->name('delete');
            });
        });
});
