<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/delete-contact/{id}', [ContactController::class, 'delete_contact']);
Route::get('/update-contact/{id}', [ContactController::class, 'update_contact']);
Route::post('/update/traitement', [ContactController::class, 'update_contact_traitement']);
Route::get('/contact', [ContactController::class, 'liste_contact']);
Route::get('/ajouter', [ContactController::class, 'ajouter_contact']);
Route::post('/ajouter/traitement', [ContactController::class, 'ajouter_contact_traitement']);
