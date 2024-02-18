<?php

use App\Http\Controllers\KaryawanController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/karyawan', function () {
//     return view('karyawan');
// });

Route::get('/add-karyawan', [KaryawanController::class, 'addKaryawan']);
Route::post('/add-karyawan1', [KaryawanController::class, 'addKaryawan1']);
Route::get('/karyawan', [KaryawanController::class, 'viewKaryawan']);
Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'editKaryawan']);
Route::patch('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan']);
Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteKaryawan']);