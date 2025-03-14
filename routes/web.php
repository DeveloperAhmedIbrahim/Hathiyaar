<?php

use Illuminate\Support\Facades\Route;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController as AdminDashboardCtrl;
use App\Http\Controllers\Admin\AuthController as AdminAuthCtrl;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryCtrl;
use App\Http\Controllers\Admin\BrandController as AdminBrandCtrl;
use App\Http\Controllers\Admin\UserController as AdminUserCtrl;
use App\Http\Controllers\Admin\ItemController as AdminItemCtrl;
use App\Http\Controllers\Admin\StockController as AdminStockCtrl;
// Client Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthenticationCheck;

// Public Routes
Route::redirect('/', 'home');

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

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(AuthenticationCheck::class)->group(function(){
    Route::redirect('/', 'admin/dashboard');
    Route::get('logout', [AdminDashboardCtrl::class, "logout"])->name('logout');
    Route::get('profile', [AdminDashboardCtrl::class, "profile"])->name('profile');
    Route::get('dashboard', [AdminDashboardCtrl::class, "dashboard"])->name('dashboard');
    Route::get("switch-theme/{mode?}", [AdminDashboardCtrl::class, "switchTheme"])->name('switch.theme');
    Route::prefix('user/{role}')->name('user.')->group(function() {
        Route::get('list', [AdminUserCtrl::class, "list"])->name('list');
        Route::match(['GET', 'POST'], 'insert', [AdminUserCtrl::class, "insert"])->name('insert');
        Route::match(['GET', 'POST'], 'update/{id?}', [AdminUserCtrl::class, "update"])->name('update');
        Route::post('delete/{id}', [AdminUserCtrl::class, "delete"])->name('delete');
        Route::post('status/{id}', [AdminUserCtrl::class, "status"])->name('status');
    });
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('list', [AdminCategoryCtrl::class, "list"])->name('list');
        Route::match(['GET', 'POST'], 'insert', [AdminCategoryCtrl::class, "insert"])->name('insert');
        Route::match(['GET', 'POST'], 'update/{id?}', [AdminCategoryCtrl::class, "update"])->name('update');
        Route::post('delete/{id}', [AdminCategoryCtrl::class, "delete"])->name('delete');
    });
    Route::prefix('brand')->name('brand.')->group(function() {
        Route::get('list', [AdminBrandCtrl::class, "list"])->name('list');
        Route::match(['GET', 'POST'], 'insert', [AdminBrandCtrl::class, "insert"])->name('insert');
        Route::match(['GET', 'POST'], 'update/{id?}', [AdminBrandCtrl::class, "update"])->name('update');
        Route::post('delete/{id}', [AdminBrandCtrl::class, "delete"])->name('delete');
    });
    Route::prefix('product/item')->name('item.')->group(function() {
        Route::get('list', [AdminItemCtrl::class, "list"])->name('list');
        Route::match(['GET', 'POST'], 'insert', [AdminItemCtrl::class, "insert"])->name('insert');
        Route::match(['GET', 'POST'], 'update/{id?}', [AdminItemCtrl::class, "update"])->name('update');
        Route::post('delete/{id}', [AdminItemCtrl::class, "delete"])->name('delete');
        Route::post('delete/image/{id}', [AdminItemCtrl::class, "deleteImage"])->name('delete.image');
    });
    Route::prefix('product/stock')->name('stock.')->group(function() {
        Route::get('list', [AdminStockCtrl::class, "list"])->name('list');
        Route::match(['GET', 'POST'], 'update/{id?}', [AdminStockCtrl::class, "update"])->name('update');
    });
});

// Auth Routes
Route::prefix('auth')->name('auth.')->group(function(){
    Route::match(['GET', 'POST'], 'login', [AuthController::class, "login"])->name('login');
    Route::match(['GET', 'POST'], 'register', [AuthController::class, "register"])->name('register');
    Route::get('forgot', [AuthController::class, "forgot"])->name('forgot');

    Route::match(['GET', 'POST'], 'admin/login', [AdminAuthCtrl::class, "login"])->name('admin.login');
    Route::get('admin/logout', [AdminAuthCtrl::class, "logout"])->name('admin.logout');
});
