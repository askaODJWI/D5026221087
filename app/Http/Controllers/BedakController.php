<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BedakController extends Controller
{
    public function index3()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
        $bedak = DB::table('bedak')->get();

    	// mengirim data pegawai ke view index
    	return view('index3',['bedak' => $bedak]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah3()
    {
        // memanggil view tambah
        return view('tambah3');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('bedak')->insert([
            'merkbedak' => $request->merkbedak,
            'stockbedak' => $request->stockbedak,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');

    }
    // method untuk edit data pegawai
    public function edit3($kodebedak)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bedak = DB::table('bedak')->where('kodebedak',$kodebedak)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit3',['bedak' => $bedak]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('bedak')->where('kodebedak',$request->kodebedak)->update([
            'merkbedak' => $request->merkbedak,
            'stockbedak' => $request->stockbedak,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');
    }

    // method untuk hapus data pegawai
    public function hapus($kodebedak)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('bedak')->where('kodebedak',$kodebedak)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bedak = DB::table('bedak')
		->where('merkbedak','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index3',['bedak' => $bedak]);

	}
    public function view3($kodebedak)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bedak = DB::table('bedak')->where('kodebedak',$kodebedak)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('view3',['bedak' => $bedak]);

    }
}
