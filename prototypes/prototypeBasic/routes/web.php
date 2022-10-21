<?php
// use App\Controllers\PromotionsController;

use App\Http\Controllers\PromotionsController;
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


Route::get('/index',[PromotionsController::class,'index']);
Route::get('/form',[PromotionsController::class,'create']);

Route::post('/add',[PromotionsController::class,'store']);

// Route::resource('/promotion',PromotionsController::class);