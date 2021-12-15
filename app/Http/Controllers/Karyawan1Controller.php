<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        // DB::table('')->get();
    	// mengambil data dari table karyawan1
    	// $pegawai = DB::table('karyawan1')->get(); //hasil get() adalah Array of Object [object][]

        $karyawan1 = DB::table('karyawan1')->paginate(5) ;

    	// mengirim data karyawan1 ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]); //teknik komunikasi / passing value antara controller dan view
    }

    // method untuk edit data karyawan1
    public function edit($id)
    {
        // mengambil data karyawan1 berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();

        // passing data karyawan1 yang didapat ke view edit.blade.php
        return view('karyawan1.edit',['karyawan1' => $karyawan1]);
    }

    // update data karyawan 1
    public function update(Request $request)
    {
        // update data karyawan 1
        DB::table('karyawan1')->where('NIP',$request->id)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);

        // alihkan halaman ke halaman beras
        return redirect('/karyawan1');
    }

    // method untuk melihat detail data karyawan1
    public function detail($id)
    {
        // mengambil data karyawan1 berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();

        // passing data karyawan1 yang didapat ke view edit.blade.php
        return view('karyawan1.detail',['karyawan1' => $karyawan1]);

    }
}
