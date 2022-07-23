<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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


Auth::routes();
Route::get('productdetails/{prod_id}', [ProductController::class, 'productview']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('Pages.about');
});
Route::get('/contact', function () {
    return view('Pages.contact');
});


Route::get('add-to-cart/{id}', 'CartController@addToCart');


// Route::get('/product/{id}', [ProductController::class, 'showproducts']);
Route::get('/product', [ProductController::class, 'show']);
// Route::get('/shop', function () {
//     return view('Pages.shop');
// });

Route::get('/cart', [CartController::class, 'index']);
// Route::post('/cart/{id}', [CartController::class, 'show']);
Route::resource('carts', CartController::class);

Route::get('/productdetails', function () {
    return view('Pages.product-details');
});
Route::get('/checkout', function () {
    return view('Pages.checkout');
});



// for admin
Route::name('admin.')->prefix('admin')->middleware(['auth', 'role'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});
