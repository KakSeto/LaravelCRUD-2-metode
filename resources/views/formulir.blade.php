<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - Menangkap Data dari Inputan </title>
</head>
<body>

    <!-- Data ditangkap oleh function 'proses' dan diawali dengan POST dulu pada Routes ---> 
	<form action="/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>

</body>
</html>