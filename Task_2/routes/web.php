<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/registration',[StudentController::class,'addStudent']);
Route::post('/registration',[StudentController::class,'addStudentSubmit']);
Route::get('/login',[StudentController::class,'login']);
Route::post('/login',[StudentController::class,'loginSubmit']);
Route::get('/contact',[StudentController::class,'contact']);
