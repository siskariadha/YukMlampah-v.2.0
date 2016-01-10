<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI</title>
	<meta charset ="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="box">
		<div class="box-in">
			<div class="top">
	<h2>REGISTRASI</h2>

	<form action="register-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
		
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" autocomplete="off" name="password" required></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td>
					<select name="level"  required>
						<option value="">pilih level</option>
						<option value="admin">Admin</option>
						<option value="user">User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<br><td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
					
		</div>
	</div>

</body>

</html>


