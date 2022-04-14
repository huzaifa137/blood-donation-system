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
Route::group(['prefix' => 'pages'],function()
{
    Route::view('appointment','pages.appointment');
    Route::view('registration','pages.registration');
    Route::POST('pages/appointment',[checkvalidation::class,'formdata']);
});

/*Admin Dashboard*/
Route::view('Admin','Admin.Admin');
Route::group(['prefix' => 'Admin'], function()
{
    Route::view('signin','Admin.signin');
    Route::view('Morris', 'Admin.Morris');
    Route::view('flot','Admin.flot');
    Route::view('data','Admin.data_details');
    Route::view('image-gallery','Admin.image-gallery');
    Route::view('Advancedrecords','Admin.jquery-datatable');
    Route::view('Registration','Admin.registration');
});