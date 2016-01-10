<?php
	session_start();
	include 'koneksi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("SELECT * FROM register WHERE username='$username'and password='$password'");
	$data=mysql_num_rows($query);
		if($data==TRUE){
			$_SESSION['username']=$username;
			
			echo '<a href="logout.php">logout</a>';
			 header("location:indexbaru/index.html");
			 
		}
		else{
			echo "Username atau Password salah";
			header("location:login.php");
		}
?>