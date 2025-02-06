<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;

// Route::get('abc', function () {
//     return view('abc');
// });


Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::resources([
    'products' => ProductController::class,
    'my-account' =>  MyAccountController::class,
    'cart'     => CartController::class,
    'checkout' => CheckoutController::class,
    'contact'  => ContactUsController::class,
    'about'    => AboutController::class,
]);