<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table("rak_buku")
            ->join("buku", "buku.id", "rak_buku.id_buku")  
            ->join("jenis_buku", "jenis_buku.id", "rak_buku.id_jenis_buku")
            ->where("buku.judul", "LIKE", "%".$request->search."%")
            ->get();

        return view("0012home",compact('data'));
    }
}
