<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\UploadController@getForm');
Route::post('/','App\Http\Controllers\UploadController@upload')->name('upload');
Route::get('/','App\Http\Controllers\UploadController@getData')->name('files');