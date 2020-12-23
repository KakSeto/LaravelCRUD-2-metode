@extends('layout/main')

@section('title','Daftar Pegawai')

@section('container')

<div class="container"> 
		<table class="table">
			
		<thead class="thead-dark">
			<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Umur</th>
			<th scope="col">Alamat</th>
			<th scope="col">Opsi</th>
			</tr>
		</thead>
		
		<tbody>
		@foreach($pegawai as $p)
		<tr>
			<th scope="row">{{ $loop->iteration }}</th>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-primary" href="/pegawai/edit/{{ $p->pegawai_id }}" role="button">Edit</a>
				| <a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}" role="button">Hapus</a>
				
			</td>
		</tr>
		@endforeach
		</tbody>
		</table>
</div>

<div class="container" alignment="right">
		<a class="btn btn-success" href="/pegawai/tambah" role="button">Tambah</a>
	</div>

@endsection 