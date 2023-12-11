<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function indexEAS()
    {
        $kategori = DB::table('kategori')->get();
    	return view('indexEAS',['kategori' => $kategori]);

    }

    public function viewEAS(Request $request)
    {
        $ID = $request->input('ID');
        $kategori = DB::table('kategori')->where('ID', $ID)->get();

        return view('viewEAS', ['kategori' => $kategori]);

    }
}
