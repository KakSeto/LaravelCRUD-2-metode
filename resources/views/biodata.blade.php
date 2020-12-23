<html>
<head>
	<title>Kirim Data Controller Ke View Laravel </title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.Setongoding.com/category/laravel">www.Setongoding.com</a>

    <br>
    
    <h2>Pemanggilan Variabel Nama : </h2>
	<p>Nama : {{ $nama }}</p>


    <!-- PEMANGGILAN ARRAY PAKAI LOOPING -->
    <h2>Pemanggilan Variabel Array Matkul  : </h2>
	<ul>
 
		@foreach($matkul as $m)
 
		<li>{{ $m }}</li>
 
		@endforeach
		
	</ul>
    <!-------------------------------------->
 
</body>
</html>