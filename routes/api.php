<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['Login'], function(){
    Route::post('register', [App\Http\Controllers\UserController::class, 'register']);
    Route::post('login', [App\Http\Controllers\UserController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);
});
Route::group(['pesquisa'], function(){
Route::apiResource('users', App\Http\Controllers\UserController::class)->names('user');
Route::apiResource('categories', \App\Http\Controllers\CategoryController::class)->names('category');
Route::apiResource('folder_levels', App\Http\Controllers\FolderLevelController::class)->names('folder_level');
});
