<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\TutorialController;
use Illuminate\Http\Request;

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

//route promotion
Route::post('add', [PromotionsController::class, "store"]);

Route::post('/update/{id}', [PromotionsController::class, "update"]);
Route::get('/delete/{id}', [PromotionsController::class, "destroy"]);

Route::get('search',[PromotionsController::class,'search']);

Route::get('/', [PromotionsController::class, 'index']);

Route::get('/add_form', [PromotionsController::class, 'create']);
Route::get('/edit_form/{id}', [PromotionsController::class, "edit"]);   //page de liste des promo



//route ampprenant
Route::post('adds',[ApprenantsController::class,'store']);

Route::post('/updates/{id}',[ApprenantsController::class,'update']);
Route::get('/deletes/{id}',[ApprenantsController::class,'destroy']);

Route::get('searchs',[apprenantController::class,'search']);

Route::get('/add_forms/{id}',[ApprenantsController::class,'create']);
Route::get('/edit_forms/{id}',[ApprenantsController::class,'edit']);   //page modifier apprenant

