<?php

use App\Http\Controllers\UsersController;
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

    Route::get('/', 'App\Http\Controllers\UsersController@loginPage')->name('login');
    Route::group(['middleware' => 'auth'], static function () {
        Route::get('/dashboard', [UsersController::class, 'index']);
        Route::get('create', [UsersController::class, 'createPage']);
        Route::post('create', [UsersController::class, 'create']);
        Route::get('edit/{user}', [UsersController::class, 'editPage']);
        Route::post('edit/', [UsersController::class, 'edit']);
        Route::get('delete/{id}', [UsersController::class, 'delete']);
        Route::get('logout', [UsersController::class, 'logout']);
    });

    Route::post('login', [UsersController::class, 'login']);
