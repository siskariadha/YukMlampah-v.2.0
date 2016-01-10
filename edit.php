<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h2>Edit akun</h2>
	
	<p><a href="index.php">Profil</a> | <a href="register.php">Tambah Data</a></p>
	
	<h3>Edit akun register	</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$username = $_GET['username'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM register WHERE username='$username'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data 	 = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="username" value="<?php echo $username; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="username" value="<?php echo $data['username']; ?>" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="password" value="<?php echo $data['password']; ?>"required></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td>
					<select name="level"  value="<?php echo $data['level']; ?>"required>
						
						<option value="admin" <?php if($data['username'] == 'admin'){ echo 'selected'; } ?>>Admin</option>	
						<option value="user" <?php if($data['username'] == 'user'){ echo 'selected'; } ?>>User</option>	
					</select>
					</select>
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