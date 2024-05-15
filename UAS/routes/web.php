<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\session;
use App\Http\Controllers\cartController;

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

// Route::get('/store', [Controller::class, 'store'])->name('store');
Route::get('/store', [cartController::class, 'store'])->name('store');


//login route
Route::middleware(['guest'])->group(function () { 
    Route::get('/login', [Controller::class, 'Login_admin'])->name('tlogin');
    Route::post('/login-pros', [session::class, 'login_pros'])->name('login-pros');
});

//logout route
Route::get('/logout', [session::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    
    //Admin route
    Route::get('/admin', [Controller::class, 'admin'])->name('admin');
    
    //User list route
    Route::get('/admin/user', [UsersController::class, 'index'])->name('User_list');
    
    //User add route
    Route::get('/admin/user/register', [Controller::class, 'Register_admin'])->name('Register_admin');
    Route::post('/admin/user/tambah', [UsersController::class, 'Tambah_user'])->name('Tambah_User');
    
    //User edit route
    Route::get('/admin/user/{id}/tedit', [UsersController::class, 'tEdit_user'])->name('tEdit_user');
    Route::post('/admin/user/{id}/edit', [UsersController::class, 'Edit_user'])->name('Edit_user');
    
    //User delete route
    Route::get('/admin/user/{id}/delete', [UsersController::class, 'Delete_user'])->name('Delete_user');
    
    //Barang list route
    Route::get('/admin/barang', [BarangController::class, 'index'])->name('Barang_list');
    
    //Barang add route
    Route::get('/admin/barang/register', [Controller::class, 'Register_barang'])->name('Register_barang');
    Route::post('/admin/barang/tambah', [BarangController::class, 'Tambah_barang'])->name('Tambah_barang');
    
    //Barang edit route
    Route::get('/admin/barang/{id}/tedit', [BarangController::class, 'tEdit_barang'])->name('tEdit_barang');
    Route::post('/admin/barang/{id}/edit', [BarangController::class, 'Edit_barang'])->name('Edit_barang');
    
    //Barang delete route
    Route::get('/admin/barang/{id}/delete', [BarangController::class, 'Delete_barang'])->name('Delete_barang');

    //Cart list route
});

Route::get('/cart', [cartController::class, 'index'])->name('cart');