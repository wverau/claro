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
    return view('auth/login');
});
Route::resource('emails','App\Http\Controllers\EmailsControlador')->middleware('permission:emails_listar');
Route::resource('users','App\Http\Controllers\UsersControlador')->middleware('permission:users_listar');
Route::get('dash', function () {
    return view('layouts.admin');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
