<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\session;
use App\Http\Controllers\cartController;
use App\Http\Controllers\Pembayaran_controller;


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


// Route::get('/store', [Controller::class, 'store'])->name('store');


Route::get('/', [Controller::class, 'index'])->name('Beranda');
//login route
Route::middleware(['guest'])->group(function () { 
    Route::get('/store', [cartController::class, 'store'])->name('store');
    Route::get('/login', [Controller::class, 'Login_admin'])->name('tlogin');
    Route::post('/login-pros', [session::class, 'login_pros'])->name('login-pros');
});

//logout route
Route::get('/logout', [session::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    

    //user route main
    Route::get('/store_login', [cartController::class, 'store_login'])->name('store_login');

    
    //Admin route
    Route::get('/admin',[Pembayaran_controller::class,'detail_checkout'])->name('admin');
    
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


    //add to cart route
    Route::get('/addtocart/{id}', [Pembayaran_controller::class, 'addTocart'])->name('addtocart');

    //delete cart route
    Route::get('/deletecart/{id}', [cartController::class, 'delete_cart'])->name('deletecart');

    //update cart route
    Route::post('/updatecart/{id}', [cartController::class, 'update_cart'])->name('updatecart');

    //move to chekout route
    Route::post('/checkout', [Pembayaran_controller::class, 'checkout'])->name('checkout');

    //detail checkout route

    Route::get('/cart', [cartController::class, 'index'])->name('cart');

    // validasi pembayaran
    Route::post('/admin/updatedetail/{id}', [Pembayaran_controller::class, 'updateStatusdetailPembayaran'])->name('updateStatusdetailPembayaran');
    Route::post('/admin/updatepembayaran/{id}', [Pembayaran_controller::class, 'updateStatusPembayaran'])->name('updateStatusPembayaran');
    



    
    

    
});
