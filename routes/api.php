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
// Route::post('login', [App\Http\Controllers\UserController::class, 'login']);

//     Route::post('register', [App\Http\Controllers\UserController::class, 'register']);
    
//     Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);

    

Route::group(['prefix'=>'access', 'middleware'=>['auth:sanctum']], function(){
    Route::apiResource('units', App\Http\Controllers\UnitController::class)->names('unit');
    Route::apiResource('users', App\Http\Controllers\UserController::class)->names('user');
    Route::apiResource('folders', App\Http\Controllers\FolderController::class)->names('folder');
    Route::apiResource('files', App\Http\Controllers\FilesController::class)->names('file');
});