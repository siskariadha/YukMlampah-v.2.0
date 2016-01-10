<?php
	session_start();
	include 'koneksi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("SELECT * FROM register WHERE username='$username'");
	$data=mysql_fetch_array($query);
		if($password == $data['password']){
			$_SESSION['username']=$data['username'];
			$_SESSION['level']=$data['level'];
			echo "sukses";
			echo '<a href="logout.php">logout</a>';
			 header("location:admin.php");
			 
		}
		else{
			echo "Username atau Password salah";
			/* header("location:login.php"); */
		}
?>