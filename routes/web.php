<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bioController;
use App\Http\Controllers\rgController;
use App\Http\Controllers\lgController;
use App\Http\Controllers\profileController;


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

// Route::get('/', function () {
//     return view('pages.tampil');
// });
//CRUD


//REGISTER
Route::get('/addReg', function () {
    return view('register.rgTambah');
});
Route::post('/addData', [rgController::class,'addData']);
//LOGIN
Route::get('/',[lgController::class,'index'])->name('login')->middleware('guest');
Route::post('/authlogin', [lgController::class,'Login']);
Route::get('/logout',[LgController::class,'logout']);

//MIDDLEWARE
Route::middleware(['auth'])->group(function () {

  //DASHBOARD
    Route::get('/tambah', function () {
        return view('pages.tambah');
    });
    Route::get('/dashboard',[bioController::class,'dashboard']);
    Route::post('/simpanData', [bioController::class,'simpanData']);
    Route::delete('/hapus/{id}', [bioController::class, 'hapusData'])->name('hapus');
    Route::get('/ubah/{id}', [bioController::class,'ubah']);
    Route::PUT('/perbaharui/{id}',[bioController::class,'data']);



    //REGISTER
    Route::get('/showReg',[rgController::class,'showOneData']);
    Route::delete('/deleteReg/{id}', [rgController::class, 'deleteData'])->name('delete');
    Route::get('/edit/{id}', [rgController::class,'edit']);
    Route::PUT('/updateReg/{id}',[rgController::class,'updateData']);

    //PROFIL
    Route::get('/profil',[profileController::class,'profile']);
});