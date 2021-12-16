<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitiatorController;
use App\Http\Controllers\ProjectController;

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
    return view('initiator.pages.initiator.login');
});


Route::get('/login',[InitiatorController::class,'login'])->name('initiator.login');
Route::post('/login',[InitiatorController::class,'loginSubmit'])->name('initiator.login');
Route::get('/registration',[InitiatorController::class,'registration'])->name('initiator.registration');
Route::post('/registration',[InitiatorController::class,'registrationSubmit'])->name('initiator.registrationSubmit');
Route::get('/dashboard',[InitiatorController::class,'dashboard'])->middleware('Validuser')->name('initiator.dashboard');
Route::get('/signout',[InitiatorController::class,'signout'])->name('initiator.signout');
Route::get('/changepicture',[InitiatorController::class,'changepicture'])->middleware('Validuser')->name('initiator.changepicture');
Route::post('/changepicture',[InitiatorController::class,'changepictureSubmit'])->middleware('Validuser')->name('initiator.changepicture');
Route::get('/changepassword',[InitiatorController::class,'changepassword'])->middleware('Validuser')->name('initiator.changepassword');
Route::post('/changepassword',[InitiatorController::class,'changepasswordSubmit'])->middleware('Validuser')->name('initiator.changepassword');
Route::get('/changeinformation',[InitiatorController::class,'changeinformation'])->middleware('Validuser')->name('initiator.changeinformation');
Route::post('/changeinformation',[InitiatorController::class,'changeinformationSubmit'])->middleware('Validuser')->name('initiator.changeinformation');
Route::get('/homepage',[ProjectController::class,'homepage'])->middleware('Validuser')->name('project.homepage');
Route::get('/proposeproject',[ProjectController::class,'proposeproject'])->middleware('Validuser')->name('project.proposeproject');
Route::post('/proposeproject',[ProjectController::class,'proposeprojectSubmit'])->middleware('Validuser')->name('project.proposeproject');
Route::get('/projectdetails',[ProjectController::class,'projectdetails'])->middleware('Validuser')->name('project.projectdetails');
Route::get('/donationhistory/{id}',[ProjectController::class,'donationhistory'])->middleware('Validuser')->name('project.donationhistory');

Route::get('/searchproject',[ProjectController::class,'searchproject'])->middleware('Validuser')->name('project.searchproject');

Route::get('/searchdonation/{id}',[ProjectController::class,'donationhistory'])->middleware('Validuser')->name('project.searchdonation');

Route::get('/filterprojectstatus/{filterstatus}',[ProjectController::class,'filterprojectstatus'])->middleware('Validuser')->name('project.filterprojectstatus');
Route::get('/filterdonationmonth/{filtermonth}',[ProjectController::class,'filterdonationmonth'])->middleware('Validuser')->name('project.filterdonationmonth');

