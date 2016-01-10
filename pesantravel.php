<!DOCTYPE html>
<html>
<head>
	<title>PEMESANAN PAKET TRAVEL</title>
	<meta charset ="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />

	<script src="development-bundle/jquery-1.8.0.min.js"></script>
    <script src="development-bundle/ui/ui.core.js"></script>
    <script src="development-bundle/ui/ui.datepicker.js"></script>
    <script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
    <script type="text/javascript">
	 $(document).ready(function(){
            $("#tanggal").datepicker({
                dateFormat : "dd/mm/yy",
                changeMonth : true,
                changeYear : true
            });
        });
    </script>
	
	
	
	
	</head>
<body>
	<div class="box">
		<div class="box-in">
			<div class="top">
				<h3>Pemesanan System</h3>
			</div>
			<div>
	<form action="pesantravel-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>ID (Password/SIM/STNK)</td>
				<td>:</td>
				<td><input type="text" name="identitas" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="alamat" required></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td>:</td>
				<td>
					<select name="tujuan" required>
						<option value="">           </option>
						<option value="Malaysia">Malaysia</option>
						<option value="Singapore">Singapore</option>
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
					<input name="tanggal" id="tanggal" type="text" /> dd/mm/yy
					
				</td>
			</tr>

			<tr>
				<td>Jumlah </td>
				<td>:</td>
				<td>
					<select name="jumlah" required>
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
				<br>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</div>

					
		</div>
	</div>

</body>

</html>


