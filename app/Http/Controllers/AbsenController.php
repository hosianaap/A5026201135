<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	$absen = DB::table('absen')->get();

    	// mengirim data absen ke view index
    	return view('absen.index',['absen' => $absen]);

    }

    // method untuk menampilkan view form tambah absen
    public function tambah()
    {

        // memanggil view tambah
        return view('absen.tambah');

    }


    // method untuk insert data ke table absen
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('absen')->insert([
            'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');

    }

    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('ID',$id)->get();
        // passing data absen yang didapat ke view edit.blade.php
        return view('absen.edit',['absen' => $absen]);

    }

    // update data absen
    public function update(Request $request)
    {
        // update data absen
        DB::table('absen')->where('ID',$request->ID)->update([
            'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk hapus data absen
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absen')->where('ID',$id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }
}
