<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<p><a href="bookinglist.php">Beranda</a> / <a href="bookingform.php">Tambah Data</a> / <a href="logout.php">logout</a></p>
	
	<h3>Data</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No</th>
			<th>No.ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Tanggal keberangkatan</th>
			<th>Jumlah</th>
			<th>Tujuan</th>

		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi2.php');
		
		//query ke database dg SELECT table register diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM bookingform ORDER BY nama DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['identitas'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['email'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['alamat'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['tanggal'].'</td>';
					echo '<td>'.$data['jumlah'].'</td>';
					echo '<td>'.$data['tujuan'].'</td>';
					echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>