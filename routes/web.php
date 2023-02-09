<?php

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
Route::get('/getUsers', [\App\Http\Controllers\UserController::class,'getUsers'])->name('getUsers');
Route::post('/saveUser', [\App\Http\Controllers\UserController::class,'saveUser'])->name('saveUser');
Route::any('/editUser', [\App\Http\Controllers\UserController::class,'editUser'])->name('editUser');
Route::any('/deleteUser', [\App\Http\Controllers\UserController::class,'deleteUser'])->name('deleteUser');
