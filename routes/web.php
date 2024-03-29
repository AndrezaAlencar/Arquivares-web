<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/unit', [App\Http\Controllers\UnitController::class, 'index'])->name('unit');
Route::resource('/unitRegister', App\Http\Controllers\UnitController::class)->names('unitRegister');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
