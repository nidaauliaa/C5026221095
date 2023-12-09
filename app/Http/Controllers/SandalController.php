<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SandalController extends Controller
{
	public function indexsandal()
	{
    	// mengambil data dari table pegawai
		$sandal = DB::table('sandal')->paginate(5);

    	// mengirim data pegawai ke view index
		return view('indexsandal',['sandal' => $sandal]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahsandal()
	{

		// memanggil view tambah
		return view('tambahsandal');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if($request->stocksandal>0){
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// insert data ke table pegawai
		DB::table('sandal')->insert([
			'kodesandal' => $request->kodesandal,
			'merksandal' => $request->merksandal,
			'stocksandal' => $request->stocksandal,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sandal');

	}

	// method untuk edit data pegawai
	public function editsandal($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sandal = DB::table('sandal')->where('kodesandal',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsandal',['sandal' => $sandal]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if($request->stocksandal>0){
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// update data pegawai
		DB::table('sandal')->where('kodesandal',$request->id)->update([
			'merksandal' => $request->merksandal,
			'stocksandal' => $request->stocksandal,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sandal');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sandal')->where('kodesandal',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sandal');
	}


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sandal = DB::table('sandal')
		->where('merksandal','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexsandal',['sandal' => $sandal, 'cari' => $cari]);

	}

    public function lihatsandal($id)
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $sandal = DB::table('sandal')->where('kodesandal',$id)->get();

    	// mengirim data pegawai ke view index
		return view('lihatsandal',['sandal' => $sandal]);

	}

}
