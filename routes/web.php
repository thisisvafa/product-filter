<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\ProductFilterController::class,'all_products'])->name('all.products');
Route::get('/search-product',[\App\Http\Controllers\ProductFilterController::class,'search_products'])->name('search.products');
Route::get('/sort-by',[\App\Http\Controllers\ProductFilterController::class,'sort_by'])->name('sort.by');
