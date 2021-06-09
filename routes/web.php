<?php

use App\Http\Controllers\PhoneBookController;
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


Route::get('/', [PhoneBookController::class, 'index']);
Route::post('create', [PhoneBookController::class, 'store']);
Route::get('create', [PhoneBookController::class, 'createPage']);
Route::get('/edit/{id}', [PhoneBookController::class, 'editPage']);
Route::post('/edit/{id}/post', [PhoneBookController::class, 'edit']);
Route::get('delete/confirmation/{id}', [PhoneBookController::class, 'deleteConfirmation']);
Route::get('/delete/{id}', [PhoneBookController::class, 'delete']);