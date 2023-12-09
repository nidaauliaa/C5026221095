<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function indexnilai()
	{
    	// mengambil data dari table pegawai
		$nilai = DB::table('nilai')->get();

    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahnilai()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}


	// method untuk insert data ke table pegawai
	public function store2(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilai')->insert([
			'id' => $request->id,
			'nrp' => $request->nrp,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');

	}




	// method untuk hapus data pegawai
	public function hapus2($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('nilai')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');
	}

}
