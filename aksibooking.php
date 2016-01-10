<?php
//mulai proses pesan pariwisata

//cek dahulu, jika tombol pesan di klik
if(isset($_POST['Pesan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi2.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$identitas		= $_POST['identitas'];	//membuat variabel $identitas dan datanya dari inputan identitas
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$email		= $_POST['email'];	//membuat variabel $email 
	$alamat	= $_POST['alamat'];	//membuat variabel $alamat 
	$tanggal	= $_POST['tanggal'];
	$jumlah	= $_POST['jumlah'];	
	$banyakorang	= $_POST['banyakorang'];
	$tujuan	= $_POST['tujuan'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO bookingform VALUES('$nama', '$email', '$alamat', '$identitas', '$tanggal','$jumlah','$banyakorang','$tujuan')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman bookingform
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="bookingform.php">Kembali</a>';	//membuat Link untuk kembali ke halaman bookingform
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}
?>
