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


Route::view('/','pages.index');
Route::view('/pages/appointment','pages.appointment');
Route::view('/pages/registration','pages.registration');
Route::POST('/pages/appointment',[checkvalidation::class,'formdata']);