<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- NYAMBUNG KE YIELD(JUDUL_HALAMAN) DI MASTER BLADE --> 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

<!-- NYAMBUNG KE YIELD(konten) DI MASTER BLADE --> 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>

@endsection