<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<p><a href="index.php">Beranda</a> / <a href="logout.php">logout</a></p>
	
	<h3>Data</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">

			<th>username</th>
			<th>password</th>
			<th>level</th>

		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table register diurutkan berdasarkan username paling besar
		$query = mysql_query("SELECT * FROM register ORDER BY username DESC") or die(mysql_error());
		
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
					echo '<td>'.$data['username'].'</td>';
					echo '<td>'.$data['password'].'</td>';
					echo '<td>'.$data['level'].'</td>';
					echo '<td><a href="edit.php?username='.$data['username'].'">Edit</a> / <a href="hapus.php?username='.$data['username'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>
