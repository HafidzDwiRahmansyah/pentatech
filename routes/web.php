<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/admin/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/admin', [UserController::class, 'admin'])->name('admin');
Route::get('/admin/artikel', [UserController::class, 'artikel'])->name('artikel');
