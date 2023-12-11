<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KapasController extends Controller
{
	public function indexkapas()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $kapas = DB::table('kapas')->paginate(3);

    	// mengirim data pegawai ke view index
		return view('indexkapas',['kapas' => $kapas]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahkapas()
	{

		// memanggil view tambah
		return view('tambahkapas');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kapas')->insert([
            'kodekapas' => $request->kodekapas,
			'namakapas' => $request->namakapas,
			'jumlah' => $request->jumlah
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kapas');

	}

	// method untuk edit data pegawai
	public function editkapas($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kapas = DB::table('kapas')->where('kodekapas',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkapas',['kapas' => $kapas]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kapas')->where('kodekapas',$request->id)->update([
            // 'kodekapas' => $request->kodekapas,
			'namakapas' => $request->namakapas,
			'jumlah' => $request->jumlah
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kapas');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kapas')->where('kodekapas',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kapas');
	}


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kapas = DB::table('kapas')
		->where('namakapas','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkapas',['kapas' => $kapas, 'cari' => $cari]);

	}

    public function lihatkapas($id)
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $kapas = DB::table('kapas')->where('kodekapas',$id)->get();

    	// mengirim data pegawai ke view index
		return view('lihatkapas',['kapas' => $kapas]);

	}

}
