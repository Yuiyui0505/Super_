<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupermarketController;

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

Route::get('/', [NoteController::class, 'index']);
Route::get('/notes/create', [NoteController::class, 'create']);
Route::get('/notes/register', [NoteController::class, 'register']);
Route::get('/notes/{note}', [NoteController::class, 'show']);
Route::get('/products/{product}', [ProductController::class,'index']);
Route::get('supermarkets/{supermarket}', [SupermarketController::class,'index']);
Route::post('/notes/', [NoteController::class, 'store']);
