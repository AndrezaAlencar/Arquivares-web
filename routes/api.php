<?php

use App\Models\Doc;
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

    
Route::post('docs', [App\Http\Controllers\DocController::class, 'store'])->name('doc');
