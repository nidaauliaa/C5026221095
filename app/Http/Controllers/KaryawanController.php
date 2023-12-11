<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function indexkaryawan()
	{
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahkaryawan()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        // if($request->stockkaryawan>0){
        //     $tersedia='Y';
        // }else {
        //     $tersedia='N';
        // }
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');

	}

	// method untuk edit data pegawai
	public function editkaryawan($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkaryawan',['karyawan' => $karyawan]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

	//method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
        ->get();


    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan, 'cari' => $cari]);

	}

    public function lihatkaryawan($id)
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();

    	// mengirim data pegawai ke view index
		return view('lihatkaryawan',['karyawan' => $karyawan]);

	}

}
