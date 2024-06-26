<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Cart\ShopCartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Inv\AssignBrandController;
use App\Http\Controllers\Inv\AssignCategoryController;
use App\Http\Controllers\Inv\CarRemoveController;
use App\Http\Controllers\Inv\ContactEmail;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
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









Route::get('/about', function () {
    return view('about');
});

Route::get('/terms', function () {
    return view('terms');
});


Route::get("/", [App\Http\Controllers\Web\HomePageController::class, 'index'])->name('welcome');
Route::get("/cart", [App\Http\Controllers\Web\HomePageController::class, 'cart'])->name("cart");
Route::get("/shop", [App\Http\Controllers\Web\HomePageController::class, 'shop'])->name("shop");
Route::get("/contact", [App\Http\Controllers\Web\HomePageController::class, 'contact'])->name("contact");
Route::get("/about", [App\Http\Controllers\Web\HomePageController::class, "about"])->name("about");
Route::get("/rand", [App\Http\Controllers\Web\HomePageController::class, "rand"])->name("rand");
Route::get("/books/categories/{category}", [App\Http\Controllers\Web\HomePageController::class, 'category'])->name("book.category");
Route::get("/books/View/{book}", [App\Http\Controllers\Web\HomePageController::class, 'showBook'])->name("book.view");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart/remove/{book}', CarRemoveController::class)->name('cart.remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post("/contact/email", ContactEmail::class)->name('contact.email');

Route::post("/books/shop-cart/{book}", ShopCartController::class)->name("cart.add");
Route::middleware("auth")->group(function () {
    Route::get("/checkout", [App\Http\Controllers\Web\HomePageController::class, 'checkout'])->name("checkout");
    Route::resource('orderItems', OrderItemController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('books', BookController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('categories', CategoryController::class);
    Route::post("books/{book}/assign-category", AssignCategoryController::class)->name("books.assign-category");
    ROute::post("books/{book}/assign-brand", AssignBrandController::class)->name("books.assign-brand");
});
