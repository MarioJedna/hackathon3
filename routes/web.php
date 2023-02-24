<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OwnerController;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/animal', [AnimalController::class, 'results'])->name('animals.results');
Route::get('/animal/create/', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animal/insert', [AnimalController::class, 'insert'])->name('animals.insert');
Route::get('/animal/{id}', [AnimalController::class, 'detail'])->name('animals.detail');
Route::get('/animal/{animalId}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animals/update/{animalId}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('animals/delete/{animalId}', [AnimalController::class, 'delete'])->name('animals.delete');

Route::get('/owners/{id}', [OwnerController::class, 'detail'])->name('owner.details');
Route::get('/owner', [OwnerController::class, 'results'])->name('owners.results');
Route::post('/owner', [OwnerController::class, 'insert'])->name('owners.insert');
Route::get('/owners-create', [OwnerController::class, 'create'])->name('owners.create');
Route::put('/owners/{id}',[OwnerController::class, 'update'])->name('owner.update');

