@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')



<div class="container">
    <div class="row">
    <div class="col-6">
        <h1 class="mt-3"> Daftar Mahasiswa </h1>

        <a class="btn btn-success" href="/mahasiswa/create" role="button">Tambah Data Mahasiswa</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
       
            <ul class="list-group">
            @foreach($mahasiswa as $mhs)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$mhs->mahasiswa_nama}}
                    <a href="/mahasiswa/{{ $mhs->id }}" class="badge badge-info">Detail</a>
                </li>      
            @endforeach
            </ul>

            

    </div>
    </div>
</div>




@endsection 