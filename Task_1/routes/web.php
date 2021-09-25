<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
//use app\Http\Controllers\PagesController;

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
    return view('index');
});
  
Route::get('/home',[PagesController::class,'index']);
  Route::get('/product',[PagesController::class,'product']);
  Route::get('/contuct',[PagesController::class,'contact']);
  Route::get('/our team',[PagesController::class,'ourTeam']);
  Route::get('/about',[PagesController::class,'about']);