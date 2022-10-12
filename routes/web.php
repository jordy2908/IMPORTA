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

Route::get('/', [\App\Http\Controllers\get_all::class, 'get_all']) -> name('home');
Route::get('/get/{proveedor}', [\App\Http\Controllers\get_all::class, 'get']) -> name('home.get');
Route::get('/get_pdf/{proveedor}', [\App\Http\Controllers\get_all::class, 'get_pdf']) -> name('home.pdf');

Route::get('/login', [\App\Http\Controllers\SessionsController::class, 'create']) -> name('login.index');
Route::post('/login', [\App\Http\Controllers\SessionsController::class, 'login']) -> name('login.login');
Route::get('/logout', [\App\Http\Controllers\SessionsController::class, 'destroy']) -> name('login.destroy');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register']) -> name('register.create');
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create']) -> name('register.index');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']) -> middleware('admin.auth') -> name('admin.index');
Route::post('/admin/all', [\App\Http\Controllers\AdminController::class, 'all']) -> middleware('admin.auth') -> name('admin.all');