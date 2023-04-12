<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerBook extends Controller
{
    //
    public function listbuku()
    {
        // $hasil =  DB::select("SELECT * FROM book s");
        $hasil = DB::select("SELECT books.*, writers.name, writers.email FROM books inner join writers on books.id = writers.book_id");

        //buat view listbuku.blade.php
        //tampilkan data list buku (hasil query) di  view listbuku.blade.php
        //tampilkan menggunakan html table
        // dd($hasil);
    }
}
