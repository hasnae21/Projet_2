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

//route promoton
// routes de redirection et de function
Route::post('add', [PromotionsController::class, "store"]);
Route::post('/update/{id}', [PromotionsController::class, "update"]);
Route::get('/delete/{id}', [PromotionsController::class, "destroy"]);
Route::get('search',[PromotionsController::class,'search']);

// routes de pages
Route::get('/', [PromotionsController::class, 'index']);
Route::get('/add_form', [PromotionsController::class, 'create']);
Route::get('/edit_form/{id}', [PromotionsController::class, "edit"]);



//route ampprenant
// Route::get('/Create/{id}',[ApprenantsController::class,'Create']);
// Route::post('/Ajouter',[ApprenantsController::class,'Ajouter']);
// Route::get('/Edit/{id}',[ApprenantsController::class,'Edit']);
// Route::post('/Modifier/{id}',[ApprenantsController::class,'Modifier']);
// Route::get('/Suprimer/{id}',[ApprenantsController::class,'Supprimer']);
