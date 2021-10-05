<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Product/List',[ProductController::class,'Read']);
Route::get('/Product/Add',[ProductController::class,'AddProduct']);
Route::post('/Product/Add',[ProductController::class,'AddProductSubmit']);
Route::get('/Product/Update/{id}',[ProductController::class,'Edit']);
Route::post('/Product/Update',[ProductController::class,'EditSubmit']);
Route::get('/Product/Delete/{id}',[ProductController::class,'Delete']);
Route::get('/login',[StudentController::class,'login']);
Route::post('/login',[StudentController::class,'loginSubmit']);
Route::get('/contact',[StudentController::class,'contact']);
