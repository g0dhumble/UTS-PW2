<?php

use App\Http\Controllers\ControllerBook;
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

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('dosen/index', function () {
    return view('dosen.index');
});

Route::get('fakultas/index', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmo Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    //menggunakan with
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]);
    //Menggunakan compact
    $univ = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekmonoi"];
    return view('fakultas.index', compact('fakultas', 'univ'));
});

//membuat rout ke halaman halo
//membuat route ke alamat url /testing
Route::get('/testing', function () {
    // return "<h1>Testing Aja</h1>";
    return ['pesan' => 'testing ajah'];
});

Route::get('/kampus', function () {
    return "Kampus elit wifi sulit";
});


Route::get('/mahasiswa/{nama?}/{npm?}', function ($nama = "", $npm = "") {
    echo "<h1>Hallo semua</h1>";
    echo "<p>Nama Saya $nama</p>";
    echo "<p>NPM saya $npm</p>";
})
    ->where(['nama' => '[A-Z]+', 'npm' => '[0-9]+'])
    ->name("mhs");

//melakukan redirect antar route
Route::get('/hubungi', function () {
    echo "<h2>Redirect ke hubungi kami</h2>";
});

Route::redirect('/contact', '/hubungi');

//Memberikan identitas nama pada remote
Route::get('/hubungi', function () {
    return "<h2>Hubungi kami</h2>";
})->name("call");

Route::get('/halo', function () {
    // return "<a href='" . route('call') . "'>" . route('call') . "</a>";
    echo "<a href='" . route('mhs', ['nama' => 'FARIZ', 'npm' => 2125250100]) . "'>" . route('mhs') . "</a>";
});

//Route Group
Route::prefix("/dosen")->group(function () {
    Route::get('/jadwal', function () {
        echo "<h2>Page Jadwal</h2>";
    });
    Route::get('/materi', function () {
        echo "<h2>Halaman Materi</h2>";
    });
});

Route::get('/prodi', [ProdiController::class, 'index']);

Route::get('/listbuku', [ControllerBook::class, 'listbuku']);
