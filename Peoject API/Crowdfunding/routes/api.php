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
Route::get('/getprojectdetails/{id}',[ProjectController::class,'getprojectdetails'])->middleware('APIAuth');
Route::post('/changeprojectdetails',[ProjectController::class,'changeprojectdetails'])->middleware('APIAuth');

Route::post('/searchproject',[ProjectController::class,'searchproject'])->middleware('APIAuth');
Route::post('/addproject',[ProjectController::class,'proposeprojectSubmit'])->middleware('APIAuth');
Route::get('/deletereviews/{id}',[ProjectController::class,'deletereviews'])->middleware('APIAuth');

Route::get('/alldonationhistory',[ProjectController::class,'alldonationhistory'])->middleware('APIAuth');
Route::get('/donationhistory/{id}',[ProjectController::class,'donationhistory'])->middleware('APIAuth');
Route::get('/reviews/{id}',[ProjectController::class,'reviews'])->middleware('APIAuth');
Route::get('/allreviews',[ProjectController::class,'allreviews'])->middleware('APIAuth');
Route::post('/searchproject',[ProjectController::class,'searchproject']);
Route::get('/filterprojectstatus/{filterstatus}',[ProjectController::class,'filterprojectstatus']);