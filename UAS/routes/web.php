<?php

use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index'])->name('Beranda');

Route::get('/store', [Controller::class, 'store'])->name('store');

Route::get('/admin', [Controller::class, 'admin'])->name('admin');

Route::get('/admin/user', [Controller::class, 'User_list'])->name('User_list');

