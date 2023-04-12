<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index()
    {
        $kampus = "Pordi Informatika";
        return view('prodi.index')->with('kampus', $kampus);
    }
}
