<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Inv\AssignCategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Web\HomePageController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/shop-single', function () {
    return view('shop-single');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get("/", [App\Http\Controllers\Web\HomePageController::class, 'index'])->name('welcome');
Route::get("/shop", [App\Http\Controllers\Web\HomePageController::class, 'shop'])->name("shop");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('books', BookController::class);
Route::resource('orders', OrderController::class);
Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::post("books/{book}/assign-category", AssignCategoryController::class)->name("books.assign-category");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
