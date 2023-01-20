<?php

use App\Http\Controllers\CommonDropdownController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


Route::get('/', [HomeController::class,'index']);
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products',[CommonDropdownController::class,'getDivisionList'])->name('getDivisionList');;
Route::get('getDistrictList', [CommonDropdownController::class, 'getDistrictList'])->name('getDistrictList');
Route::get('getUpazilaList', [CommonDropdownController::class, 'getUpazilaList'])->name('getUpazilaList');
