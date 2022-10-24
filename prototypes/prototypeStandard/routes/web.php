<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\TutorialController;

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

// Route::resource('/promotion',PromotionsController::class);





Route::get('/index', [PromotionsController::class, 'index']);

Route::get('/create', [PromotionsController::class, 'create']);

Route::post('add',[PromotionsController::class,"store"]);



///////
Route::get('/edit/{id}',[PromotionsController::class ,"edit"]);

Route::post('/update/{id}',[PromotionsController::class,"update"]);

Route::get('/delete/{id}',[PromotionsController::class,"destroy"]);
