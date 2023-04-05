<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
// Listing des tâches
Route::get('/', [TodoController::class, 'index']) ; 

// Route pour ajouter une tâche
Route::post('/add',[TodoController::class, 'create'])->name('add'); 

//Route de mise à jour d'une tâche
Route::get('/upd/{id}',[TodoController::class, 'update'])->name('upd') ; 

// Route pour supprimer une tâche
Route::get('/del/{id}',[TodoController::class, 'delete'])->name('del') ; 