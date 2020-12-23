@extends('layout/main')

@section('title','Detail Mahasiswa')

@section('container')



<div class="container">
    <div class="col-6">
        <h1 class="mt-3"> Detail Mahasiswa </h1>

            <!-- Trying to get bla bla karena foreach foreach($mahasiswa as $mahasiswa)
            
            kan udah dapat id yang dimaksud, jadinya ga perlu foreach buat loop database -->
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> </h5>
                <!-- Kenapa $mahasiswa dan bukan $mhs ? karena yg dikirim dari controller variabelnya $mahasiswa -->
                <h6 class="card-subtitle mb-2 text-muted">{{ $mahasiswa->mahasiswa_nama }}</h6>
                <p class="card-text">{{ $mahasiswa->mahasiswa_jurusan }}</p>
                <p class="card-text">{{ $mahasiswa->mahasiswa_email }}</p>

                
                <a href="{{ $mahasiswa->id}}/edit" class="btn btn-primary">Edit</a>

                <!-- Agar tidak bisa bypass delete lewat url, hanya bisa ketika delete bia tombol -->

                <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>

                </form>
                <a href="/mahasiswa" class="card-link">Kembali</a>
            </div>
            </div>
            
            
           

    </div>
</div>




@endsection 