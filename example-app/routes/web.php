<?php

use App\Http\Controllers\ControllerMahasiswa;
use App\Http\Controllers\ProdiController;
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
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing.index');
});

Route::get('/satria', function () {
    return view('satria.index');
});


Route::get('/prodi', [ProdiController::class, 'index']);


Route::get('/listMahasiswa', [ControllerMahasiswa::class, 'listmahasiswa']);
