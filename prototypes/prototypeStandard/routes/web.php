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

// routes de redirection et de function
Route::post('add', [PromotionsController::class, "store"]);
Route::post('/update/{id}', [PromotionsController::class, "update"]);

Route::get('/delete/{id}', [PromotionsController::class, "destroy"]);


// routes de pages
Route::get('/', [PromotionsController::class, 'index']);
Route::get('/add_form', [PromotionsController::class, 'create']);

Route::get('/edit_form/{id}', [PromotionsController::class, "edit"]);
