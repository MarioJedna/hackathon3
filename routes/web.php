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

Route::get('/animal/{id}', [AnimalController::class, 'detail'])->name('animals.detail');
Route::get('/animal', [AnimalController::class, 'results'])->name('animals.results');


Route::get('/owners/{id}', [OwnerController::class, 'detail'])->name('owner.details');
Route::get('/owner', [OwnerController::class, 'results'])->name('owners.results');

