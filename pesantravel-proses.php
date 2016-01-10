<?php


if(isset($_POST['tambah'])){

	include('koneksi.php');

	function ubahformatTgl($tanggal) {
        $pisah = explode('/',$tanggal);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $satukan = implode('-',$urutan);
        return $satukan;
    }
	
	$identitas		= $_POST['identitas'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$alamat		= $_POST['alamat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$tujuan	= $_POST['tujuan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$tanggal	= $_POST['tanggal'];
	$jumlah	= $_POST['jumlah'];

    $ubahtgl = ubahformatTgl($tanggal);

	$input = mysql_query("INSERT INTO pesantravel VALUES('$identitas', '$nama', '$alamat', '$tujuan', '$ubahtgl','$jumlah')");
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="indexadmin/index.html">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
			
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="pesantravel.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?> 