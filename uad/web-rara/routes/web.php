<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\ListProducts;
use App\Http\Livewire\DetailProduct;
use App\Http\Livewire\Home;
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

Route::get('/', Home::class)->name('/');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('menu', MenuController::class);
    Route::resource('users', UsersController::class);
    Route::resource('list-carts', CartController::class);
});

Route::get('/list-menu', ListProducts::class)->name('list-products');
Route::get('/detail-menu/{id}', DetailProduct::class)->name('detail-product');
