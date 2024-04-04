<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//Level
Route::get('/level', [LevelController::class, 'index']);

//User
Route::get('/user', [UserController::class, 'index'])->name('/user');

//Add User
// Route::get('/user/tambah', [UserController::class, 'create'])->name('/user/create');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
// Route::post('/user', [UserController::class, 'tambah_simpan']);

//Update User
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

//Delete User
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

//Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('/kategori');

//Create Kategori
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
Route::post('/kategori', [KategoriController::class, 'store']);

//Edit Kategori
Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('/kategori/update');
Route::put('/kategori/update_simpan/{id}', [KategoriController::class, 'update_simpan'])->name('/kategori/update_simpan');

//Delete Kategori
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');

// User Baru js 6
Route::get('/user', [UserController::class, 'index'])->name('/user');
Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('/user/edit');
Route::post('/user', [UserController::class, 'store']);

// Level Baru js 6
Route::get('/level', [LevelController::class, 'index'])->name('/level');
Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('/level/edit');
Route::post('/level', [LevelController::class, 'store']);

// m_user
Route::resource('m_user', POSController::class);