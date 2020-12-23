@extends('layout/main')

@section('title','Tambah Data Mahasiswa')

@section('container')



<div class="container">
    <div class="col-8">
        <h1 class="mt-3"> Form Tambah Data Mahasiswa </h1>

        
        <!-- mengapa action="/mahasiswa" ? apa tidak tabrakan ?
        tidak karena methodnya post baik disini maupun di routes -->
        <form method='post' action="/mahasiswa">
        @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                id="nama" placeholder="Masukkan Nama" 
                 name="nama" value="{{ old('nama') }}">

                 @error('nama')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                id="jurusan" placeholder="Masukkan Jurusan" 
                 name='jurusan' value="{{ old('jurusan') }}">

                 @error('jurusan')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" 
                id="email" placeholder="Masukkan Email" 
                 name='email' value="{{ old('email') }}">

                 @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                 
                 @enderror
            </div>
            <button class="btn btn-primary" type="submit">Tambah Data</button>
            </div>
        </form>
           

    </div>
</div>




@endsection 