<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitiatorController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[InitiatorController::class,'loginSubmit']);
Route::get('/homepage',[ProjectController::class,'homepage']);
Route::get('/projectdetails/{email}',[ProjectController::class,'projectdetails'])->middleware('APIAuth');
Route::get('/donationhistory/{id}',[ProjectController::class,'donationhistory']);
Route::post('/searchproject',[ProjectController::class,'searchproject']);
Route::get('/filterprojectstatus/{filterstatus}',[ProjectController::class,'filterprojectstatus']);