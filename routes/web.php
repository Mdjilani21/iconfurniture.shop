<?php

use App\Http\Controllers\CommonDropdownController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

//Auth
Route::get('/login', [AuthController::class,'userAuthLogin'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login-user', [AuthController::class,'userAuthLoginPost'])->name('login-user');
Route::get('/register', [AuthController::class,'userAuthRegister'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class,'userAuthRegisterPost'])->name('register-user');
Route::get('/forgetPassword', [AuthController::class,'userAuthForgetPassword'])->name('forgetPassword');
Route::get('/logout', [AuthController::class,'userAuthLogout'])->name('logout');

Route::get('/', [AuthController::class,'home'])->name('home')->middleware('isLoggedIn');

//Admin
Route::get('/adminLogin', [AdminController::class,'adminAuthLogin'])->name('adminLogin')->middleware('adminAlreadyLoggedIn');
Route::post('/login-admin', [AdminController::class,'AdminAuthLoginPost'])->name('login-admin');
Route::get('/admin', [AdminController::class,'index'])->name('admin')->middleware('adminLogin');
Route::get('/adminLogout', [AdminController::class,'adminAuthLogout'])->name('adminLogout');
Route::get('/Admin-ProductList', [AdminController::class,'adminProductList'])->name('Admin-ProductList');
Route::get('/Admin-ProductAdd', [AdminController::class,'adminProductAdd'])->name('Admin-ProductAdd');
Route::post('/Admin-ProductStore', [AdminController::class,'adminProductStore']);

//iconfurniture.shop
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home')->name('home');
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/allProducts', [ProductController::class,'allProduct'])->name('allProducts');
Route::get('/products',[CommonDropdownController::class,'getDivisionList'])->name('getDivisionList');
Route::get('getDistrictList', [CommonDropdownController::class, 'getDistrictList'])->name('getDistrictList');
Route::get('getUpazilaList', [CommonDropdownController::class, 'getUpazilaList'])->name('getUpazilaList');


Route::get('productList', [ProductController::class,'productListAjax'])->name('productListAjax');
Route::get('searchProduct', [ProductController::class,'searchProduct'])->name('productListPage');