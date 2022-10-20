<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellController;
use App\Http\Middleware\AdminLoginCheck;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// admin auth
Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/login/check', [AdminLoginController::class, 'loginCheck'])->name('login.check');
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

// middleware group
Route::middleware('adminAuth')->group(function () {
    //dashboard
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    // sell
    Route::get('/admin/product/sell', [SellController::class, 'create'])->name('sell.add');
    Route::get('/admin/customer/search', [SellController::class, 'customerSearch'])->name('customer.search');
    Route::get('/admin/product/search', [SellController::class, 'productSearch'])->name('product.search');



// products category route
Route::get('/admin/product/category', [ProductCategoryController::class, 'index'])->name('product.category');
Route::post('admin/product/category/add', [ProductCategoryController::class, 'store'])->name('product.category.add');
Route::delete('admin/product/category/{id}', [ProductCategoryController::class, 'destroy'])->name('product.category.destroy');

// product route
Route::get('admin/product/add', [ProductsController::class, 'create'])->name('product.add');
Route::post('admin/product/add', [ProductsController::class, 'store'])->name('product.store');
Route::get('admin/product/list', [ProductsController::class, 'index'])->name('product.list');
Route::delete('admin/product/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');


// Customer Route
Route::get('admin/customer/all', [CustomerController::class, 'index'])->name('customer.all'); 
Route::get('admin/customer/add', [CustomerController::class, 'create'])->name('customer.create'); 
Route::post('admin/customer/add', [CustomerController::class, 'store'])->name('customer.store'); 
Route::delete('admin/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy'); 

});





