<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<h3>Pesan perjalanan</h3>
	
	<form action="aksibooking.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nomor Id (ktp/sim/passport/stnk)</td>
				<td>:</td>
				<td><input type="text" name="identitas" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="email" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="30" required></td>
			</tr>
			<tr>
				<td>Tanggal keberangkatan</td>
				<td>:</td>
            <td><select name="tanggal" required>
                <option value="">tanggal</option>
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
				<option value="10">11</option>
				<option value="10">12</option>
				<option value="10">13</option>
				<option value="10">14</option>
				<option value="10">15</option>
				<option value="10">16</option>
				<option value="10">17</option>
				<option value="10">18</option>
				<option value="10">19</option>
				<option value="10">20</option>
				<option value="10">21</option>
				<option value="10">22</option>
				<option value="10">23</option>
				<option value="10">24</option>
				<option value="10">25</option>
				<option value="10">26</option>
				<option value="10">27</option>
				<option value="10">28</option>
				<option value="10">29</option>
				<option value="10">30</option>
				<option value="10">31</option>
            </select > 
			            <select name="tanggal" required>
                <option value="">bulan</option>
                <option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">Mei</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Agt</option>
				<option value="9">Sep</option>
				<option value="10">Okt</option>
				<option value="10">Nov</option>
				<option value="10">Des</option>
            </select >
			            <select name="tanggal" required>
                <option value="">tahun</option>
                <option value="1">2016</option>
				<option value="2">2017</option>
            </select >
			</td>
			</li>
			</tr>			
			<tr>
				<td>Jumlah orang</td>
				<td>:</td>
				<td> 
            <select name="banyakorang" required>
                <option value="0">0</option>
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
            </select ></td>
			</tr>			<tr>
				<td>Paket</td>
				<td>:</td>
				<td>
					<select name="tujuan" required>
					<option value="">-- Tujuan pariwisata --</option>
					<option value="Thailand">Thailand</option>
					<option value="singapure">Singapore</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Pulau Derawan">Pulau Derawan</option>
					<option value="Karimun Jawa">Karimun Jawa</option>
					<option value="Batam">Batam</option>
					<option value="Ijen- Baluran">Ijen - Baluran</option>
					<option value="Bromo - Malang">Bromo - Malang</option>
					</select >
				</td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="pesan" value="pesan"></td>
			</tr>
		</table>
	</form>
</body>
</html>