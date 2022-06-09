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
Route::post('login', [App\Http\Controllers\UserController::class, 'login']);

    Route::post('register', [App\Http\Controllers\UserController::class, 'register']);
    
    Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);

    

Route::group(['prefix'=>'access', 'middleware'=>['auth:sanctum']], function(){
Route::apiResource('units', App\Http\Controllers\UnitController::class)->names('unit');
Route::apiResource('users', App\Http\Controllers\UserController::class)->names('user');
Route::apiResource('categories', App\Http\Controllers\CategoryController::class)->names('category');
Route::apiResource('folderlevels', App\Http\Controllers\FolderLevelController::class)->names('folder_levels');
Route::apiResource('documents', App\Http\Controllers\DocumentController::class)->names('documents');
});