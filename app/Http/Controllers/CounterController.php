<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
	public function indexcounter()
	{
    	// Update jumlah terlebih dahulu
        DB::table('counter')->increment('Jumlah');

        // Ambil nilai Jumlah setelah diupdate
        $jumlahPengunjung = DB::table('counter')->where('ID', 1)->value('Jumlah');

        // Tampilkan view dengan data jumlah pengunjung
        return view('indexcounter', ['jumlahPengunjung' => $jumlahPengunjung]);
	}

	// // method untuk insert data ke table pegawai
	// public function store(Request $request)
	// {

	// 	DB::table('counter')->insert([
	// 		'id' => $request->id,
    //         'jumlah' => $request->jumlah
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/counter');

	// }

    // public function lihatcounter($id)
	// {
    // 	// mengambil data dari table pegawai
	// 	// $pegawai = DB::table('pegawai')->get();
    //     $counter = DB::table('counter')->where('id',$id)->get();

    // 	// mengirim data pegawai ke view index
	// 	return view('lihatcounter',['counter' => $counter]);

	// }

}
