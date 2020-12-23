@extends('layout/main')

@section('title', 'Halaman Tambah Pegawai')

@section('container')

      <form action="/pegawai/store" method="post">
       
        <div class="container">
        
        @csrf
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" >
          </div>

          <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" >
          </div>

          <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" name="umur">
          </div>

          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" >
          </div>

          
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
@endsection