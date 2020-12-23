@extends('layout/main')

@section('title','Halaman Edit Pegawai')

@section('container')
    @foreach($pegawai as $p)
      <form action="/pegawai/update" method="post">
       
        <div class="container">
        
        @csrf
        
        <!-- MENGAPA HARUS PAKAI PEGAWAI ID trus di hidden ? karena id dibawa ke controller untuk patokan mana yg diubah -->
        <!-- untuk menaruh isi id, maka letakkan di form yg hidden -->
        <div class="form-group">
              <input type="hidden" class="form-control" name="id" value="{{ $p->pegawai_id }}">
        </div>

          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
          </div>

          <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
          </div>

          <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
          </div>

          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="{{ $p->pegawai_alamat }}" >
          </div>

          
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
      @endforeach
@endsection