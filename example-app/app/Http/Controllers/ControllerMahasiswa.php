<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMahasiswa extends Controller
{
    //

    public function listmahasiswa()
    {
        $hasil = DB::select('SELECT * FROM mahasiswas');
        dd($hasil);
    }
}
