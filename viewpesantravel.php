<!DOCTYPE html>
<html>
<head>
	<title>View Pesan Travel</title>
</head>
<body>

	<p><a href="index.html">Home</a> / <a href="viewpesantravel.php">kembali</a></p>
	
	<h3>Data</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">

			<th>ID (passport/sim/stnk)</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tujuan</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>opsi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table register diurutkan berdasarkan username paling besar
		$query = mysql_query("SELECT * FROM pesantravel ORDER BY nama DESC") or die(mysql_error());
		
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
					echo '<td>'.$data['ID'].'</td>';
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['alamat'].'</td>';
					echo '<td>'.$data['tujuan'].'</td>';
					echo '<td>'.$data['tanggal'].'</td>';
					echo '<td>'.$data['orang'].'</td>';
					echo '<td><a href="editpesantravel.php?nama='.$data['nama'].'">Edit</a> / <a href="hapus.php?nama='.$data['nama'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>
