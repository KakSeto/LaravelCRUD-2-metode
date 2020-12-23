<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = \App\Models\Mahasiswa::all();
 
        // mengirim data pegawai ke view index
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan halaman data 
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Metode Pertama

        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->mahasiswa_nama = $request->nama;
        // $mahasiswa->mahasiswa_jurusan = $request->jurusan;
        // $mahasiswa->mahasiswa_email = $request->email;
        
        // $mahasiswa->save();

        //Metode Kedua - Mengguakan Create + Tambah Fillable di Model


        //VALIDASI SELALU DIDAHULUKAN
        // yang dikiri nama field view, bukan nama kolom database
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
        ]);
 

        Mahasiswa::create([
            'mahasiswa_nama' => $request->nama,
            'mahasiswa_jurusan' => $request->jurusan,
            'mahasiswa_email' => $request->email
        ]);

        //Metode Ketiga - Kalau udah set fillable bisa pakai ini
        // ini akan mengambil semua request di view sesuai yg tertulis di fillable

       // Mahasiswa::create($request->all());

       
      

        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
       
        // mengirim data pegawai ke view index
        return view('mahasiswa.show',compact('mahasiswa'));
        //return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
         //tanpa tau id yg mana, Laravel bisa tau id yg dimaksud dari detail
         //return $mahasiswa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
       return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //berisi data lama
        //return $mahasiswa;

        // berisi data baru
        // return $request;

        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
        ]);

        Mahasiswa::where('id', $mahasiswa->id)
                    ->update([
                        'mahasiswa_nama' => $request->nama,
                        'mahasiswa_jurusan' => $request->jurusan,
                        'mahasiswa_email' => $request->email
                    ]);
                    
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil DiHapus');
    }
}
