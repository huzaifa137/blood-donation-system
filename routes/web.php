<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checkvalidation;

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

/*Website and User Interface*/
Route::view('/','pages.index');
Route::view('/pages/appointment','pages.appointment');
Route::view('/pages/registration','pages.registration');
Route::POST('/pages/appointment',[checkvalidation::class,'formdata']);


/*Admin Dashboard*/
Route::view('Admin','Admin.Admin');
Route::view('Admin/signin','Admin.signin');
Route::view('Admin/data','Admin.data_details');
Route::view('Admin/Advancedrecords','Admin.jquery-datatable');
Route::view('Admin/Admin/Advancedrecords','Admin.jquery-datatable');
Route::view('Admin/Registration','Admin.registration');