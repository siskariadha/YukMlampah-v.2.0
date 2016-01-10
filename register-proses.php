<?php

if(isset($_POST['tambah'])){
	
	include('koneksi.php');
	
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level	= $_POST['level'];
	
	$input = mysql_query("INSERT INTO register VALUES('$username','$password','$level')") or die(mysql_error());
	
	if($input){		
		echo 'Data berhasil di tambahkan! ';	
		echo '<a href="login.php">Kembali</a>';
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="register.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?> 