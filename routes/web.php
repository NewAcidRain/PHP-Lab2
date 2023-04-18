<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
use \App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'mainPage'])->name('main');
Route::get('/product', [ProductController::class, 'product'])->name('products');
Route::get('/product/{code:symbolic_code}', [ProductController::class, 'getProduct'])->name('product.show');
Route::delete('product/{code:symbolic_code}/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('product/{code:symbolic_code}/edit', [ProductController::class, 'updatePage'])->name('product.update.page');
Route::put('product/{code:symbolic_code}/update', [ProductController::class, 'updateProduct'])->name('product.update');

Route::get('/category', [CategoryController::class, 'category'])->name('category.main');
Route::get('/category/{categories:symbolic_code}', [CategoryController::class, 'categoryProducts'])->name('category.products');
Route::post('/category/{categories:symbolic_code}/sorted', [CategoryController::class, 'sortByPrice'])->name('category.sorted');
Route::post('/category/{categories:symbolic_code}/input_sorted', [CategoryController::class, 'sortFromTo'])->name('category.input.sorted');
