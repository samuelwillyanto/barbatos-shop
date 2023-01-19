<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login Logout
Route::get('/login', [UserController::class, 'login'])->name('login_user');
Route::post('loginLogic', [UserController::class, 'login_logic'])->name('login_logic');
Route::get('logoutLogic', [UserController::class, 'logout_logic'])->name('logout_logic')->middleware('auth');

// Register
Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
Route::post('register/action', [UserController::class, 'register_logic'])->name('register_logic');

// Category
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('by_category');

// Products
Route::get('/detail/{id}', [ProductController::class, 'detail']);

// Search
Route::get('/search', [ProductController::class, 'search_product'])->name('search_product');
Route::get('/search_admin', [ProductController::class, 'search_product_admin'])->name('search_product_admin');

// Profile Page
Route::get('/profile', [UserController::class, 'profile_index'])->name('profile')->middleware('auth');

// Manage Product
Route::get('/product/manage', [ProductController::class, 'manage_product'])->name('manage_product');

// Add Product
Route::get('/product/add', [ProductController::class, 'add_form'])->name('product_add_form');
Route::post('/product/add', [ProductController::class, 'add_logic'])->name('product_add_logic');

// Update Product
Route::get('/product/update', [ProductController::class, 'update_product_form'])->name('update_product_form');
Route::patch('/product/update', [ProductController::class, 'update_product_logic'])->name('update_product_logic');

// Delete Product
Route::delete('/product/delete', [ProductController::class, 'delete_product'])->name('delete_product');

// Cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::delete('/cart/delete', [CartController::class, 'delete_cart'])->name('delete_cart');
Route::post('/cart/purchase', [CartController::class, 'purchase'])->name('purchase');

// History
Route::get('/history', [TransactionController::class, 'index'])->name('history');
