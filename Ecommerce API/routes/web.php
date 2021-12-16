<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
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



Route::get('/product/list',[ProductController::class,'list'])->middleware('LoggedIn')->name('product.list');
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->middleware('LoggedIn')->name('product.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->middleware('LoggedIn')->name('product.emptycart');
Route::get('/showcart',[ProductController::class,'showcart'])->middleware('LoggedIn')->name('product.showcart');
Route::get('/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/login',[CustomerController::class,'loginsubmit'])->name('customer.login');
Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('/confirmorder',[ProductController::class,'confirmorder'])->middleware('LoggedIn')->name('product.confirmorder');
Route::get('/myorder',[ProductController::class,'myorder'])->middleware('LoggedIn')->name('product.myorder');