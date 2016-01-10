<!DOCTYPE html>
<html>
<head>
	<title>Edit Pemesanan</title>
</head>
<body>
	<h2>Edit Pesan Travel</h2>
	
	<p><a href="indexadmin/index.html">Beranda</a> | <a href="viewpesandata.php">Kembali</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$nama = $_GET['nama'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM pesantravel WHERE nama='$nama'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="editpesantravel-proses.php" method="post">
		<input type="hidden" name="nama" value="<?php echo $nama; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID (Password/SIM/STNK)</td>
				<td>:</td>
				<td><input type="text" name="identitas" value="<?php echo $data['ID']; ?>" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="nama" value="<?php echo $data['nama']; ?>"required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="alamat" value="<?php echo $data['alamat']; ?>"required></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td>:</td>
				<td>
					<select name="tujuan" value="<?php echo $data['tujuan']; ?>"required>
						<option value="">           </option>
						<option value="Malaysia">Malaysia</option>
						<option value="Singapure">Singapure</option>
						<option value="Thailand">Thailand</option>
						<option value="Karimun Jawa">Karimun Jawa</option>
						<option value="Pulau Derawan">Pulau Derawan</option>
						<option value="Batam">Batam</option>
						<option value="Ijen-Baluran">Ijen-Baluran</option>
						<option value="Bromo-Malang">Bromo-Malang</option>
					</select>
				</td>
				</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td>
					<input name="tanggal" id="tanggal" type="text" value="<?php echo $data['tanggal']; ?>"/> dd/mm/yy
					
				</td>
			</tr>

			<tr>
				<td>Jumlah </td>
				<td>:</td>
				<td>
					<select name="jumlah" value="<?php echo $data['orang']; ?>" required>
						<option value="">           </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>&nbsp /orang
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>