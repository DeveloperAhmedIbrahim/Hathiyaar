<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'home');

Route::get('login', [AuthController::class, "login"])->name('login');
Route::get('register', [AuthController::class, "register"])->name('register');
Route::get('forgot', [AuthController::class, "forgot"])->name('forgot');

Route::get('home', [HomeController::class, "home"])->name('home');
Route::get('about', [HomeController::class, "about"])->name('about');
Route::get('contact', [HomeController::class, "contact"])->name('contact');
Route::get('site-map', [HomeController::class, "siteMap"])->name('siteMap');
Route::get('terms-conditions', [HomeController::class, "termsConditions"])->name('termsConditions');
Route::get('delivery-information', [HomeController::class, "deliveryInformation"])->name('deliveryInformation');
Route::get('privacy-policy', [HomeController::class, "privacyPolicy"])->name('privacyPolicy');

Route::get('blog', [HomeController::class, "blog"])->name('blog');
Route::get('brand', [HomeController::class, "brand"])->name('brand');
Route::get('category', [HomeController::class, "category"])->name('category');
Route::get('checkout', [HomeController::class, "checkout"])->name('checkout');
Route::get('gift-cirtificate', [HomeController::class, "giftCirtificate"])->name('giftCirtificate');
Route::get('established', [HomeController::class, "established"])->name('established');
Route::get('established-fact', [HomeController::class, "establishedFact"])->name('establishedFact');
Route::get('packages', [HomeController::class, "packages"])->name('packages');
Route::get('product-comparison', [HomeController::class, "productComparison"])->name('productComparison');
Route::get('product', [HomeController::class, "product"])->name('product');
Route::get('shop', [HomeController::class, "shop"])->name('shop');
Route::get('cart', [HomeController::class, "cart"])->name('cart');
Route::get('standard-lorem', [HomeController::class, "standardLorem"])->name('standardLorem');
Route::get('variations', [HomeController::class, "variations"])->name('variations');
Route::get('get-some', [HomeController::class, "getSome"])->name('getSome');
