<?php

use App\Http\Controllers\dashbord\AdminContactController;
use App\Http\Controllers\dashbord\AdminHomeController;
use App\Http\Controllers\dashbord\AdminLoginController;
use App\Http\Controllers\dashbord\ProductController;
use App\Http\Controllers\dashbord\UserController;
use App\Http\Controllers\dashbord\AdminOrderController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add_to_cart');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/add-to-wishlist/{id}', [HomeController::class, 'addToWishlist'])->name('add_to_wishlist');
Route::post('/update_cart/{id}', [HomeController::class, 'update_cart'])->name('update_cart');
Route::get('/delete-cart/{id}', [HomeController::class, 'deleteCart'])->name('delete_cart');
Route::get('/delete-wishlist/{id}', [HomeController::class, 'deleteWishlist'])->name('delete_wishlist');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/completeCheckout', [HomeController::class, 'completeCheckout'])->name('completeCheckout');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSend'])->name('contactSend');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [HomeController::class, 'profileUpdate'])->name('profile.update');
Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix' => "dashboard", 'as' => "admin."], function () {
    // Auth
    Route::get('/', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/', [AdminLoginController::class, 'adminLogin'])->name('admin_login');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    // Route::get('/profile', [AdminLoginController::class, 'profile'])->name('profile');
    // Route::put('/profile/update/{id}', [AdminLoginController::class, 'profileUpdate'])->name('profile.update');
    // //
    Route::get('/home', [AdminHomeController::class, 'home'])->name('home');
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contact/destroy/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    Route::resource('users', UserController::class);

    // //Products
    Route::resource('products', ProductController::class);
    // //Orders
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [AdminOrderController::class, 'order'])->name('orders.show');
});
