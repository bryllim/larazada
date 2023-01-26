<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');

Route::get('/addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/cart',  [CartController::class, 'cart'])->name('cart');
Route::get('/emptycart',  [CartController::class, 'emptycart'])->name('emptycart');