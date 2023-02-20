<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KaryawanController;

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
    return view('index');
});

Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/create', [KaryawanController::class,'create']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class,'edit']);
Route::put('/karyawan/{id}', [KaryawanController::class,'update']);
Route::delete('/karyawan/{id}', [KaryawanController::class,'destroy']);

