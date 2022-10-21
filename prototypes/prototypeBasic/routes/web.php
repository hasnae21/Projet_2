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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/index',[promotionController::class,'index']);
// Route::get('/form',[promotionController::class,'create']);
// Route::post('/add',[promotionController::class,'store']);

Route::resource('/promotion',promotionController::class);