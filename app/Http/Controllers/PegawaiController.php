<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Karena menggunakan Query Builder, maka wajib cantumkan ini */
use Illuminate\Support\Facades\DB;

/* Kalau mau pakai namespace biar singkat */
// use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){

        /* ----  METODE QUERY BUILDER ---- */
        // mengambil data dari table pegawai
        // query builder --> select from pegawai
        //$pegawai = DB::table('pegawai')->get();


        /* ---- METODE Eloquent ORM ( Pakai Model ) ------ */
        // mengapa butuh '\' didepan App?
        // padahal di dokumentasi App\model saja ?
        // ini masalah namespace
        // dikarenakan diatas namespacenya sudah ditimpa dengan : namespace App\Http\Controllers;
        // solusi : tambahin "\" jadi  $pegawai = \App\Models\Pegawai::all();
        // atau tambahin bikin namespace sendiri diatas tambahin diatas
        // use App\Models\Pegawai;
        // lalu diikuti $pegawai = Pegawai::all();

        $pegawai = \App\Models\Pegawai::all();
 
        // mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');

    }


    // method untuk edit data dari table pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

        // passing data pegawai yang didapat sesuai id ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);

    }

  

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk edit data dari table pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');

    }


}