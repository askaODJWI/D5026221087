<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil perkalian = " . (string)$c . "</h1>";
    }
    public function showBlog(){
        $nama = "Ryan";
        $alamat = "Tangerang";
        $umur = 19;
        return view('blog', ['nama'=>$nama, 'alamat'=>$alamat, 'umur'=>$umur]);
    }
    public function showNama($nama){ // $nama itu sama dengan {nama} di web.php
        // $nama = "Ryan";
        // $alamat = "Tangerang";
        // $umur = 19;
        // return view('blog', ['nama'=>$nama, 'alamat'=>$alamat, 'umur'=>$umur]);
        return "Anda telah mengisikan: " . $nama;
    }
    public function formulir(){
        //Cek soal hak akses
    	return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
}
}
