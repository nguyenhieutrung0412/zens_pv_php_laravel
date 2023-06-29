<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\JokerController;


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


Route::get('/', [AlgorithmController::class, 'index']);
// Route::post('/index', [AlgorithmController::class, 'index'])->name('value');
Route::get('/joker', [JokerController::class, 'index'])->name('joker');
Route::get('/joker_like/{id}', [JokerController::class, 'like'])->name('joker_like');
Route::get('/joker_dislike/{id}', [JokerController::class, 'dislike'])->name('joker_dislike');

