@extends('layout/main')

@section('title','Ubah Data Mahasiswa')

@section('container')



<div class="container">
    <div class="col-8">
        <h1 class="mt-3"> Form Ubah Data Mahasiswa </h1>

        
        <!-- mengapa action="/mahasiswa" ? apa tidak tabrakan ?
        tidak karena methodnya post baik disini maupun di routes -->
        <form method='post' action="/mahasiswa/{{ $mahasiswa->id }}">
        @method('patch')
        @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                id="nama" placeholder="Masukkan Nama" 
                 name="nama" value="{{ $mahasiswa->mahasiswa_nama }}">

                 @error('nama')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                id="jurusan" placeholder="Masukkan Jurusan" 
                 name='jurusan' value="{{ $mahasiswa->mahasiswa_jurusan }}">

                 @error('jurusan')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" 
                id="email" placeholder="Masukkan Email" 
                 name='email' value="{{ $mahasiswa->mahasiswa_email }}">

                 @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <button class="btn btn-primary" type="submit">Ubah Data</button>
            </div>
        </form>
           

    </div>
</div>




@endsection 