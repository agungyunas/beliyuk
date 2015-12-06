<?php
session_start();

if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "delete from akun_user where username='".$_GET['username']."'";
	
	$hasil = mysql_query($query) or die (mysql_error());
	
						if($hasil){
									echo "<script> alert('hapus berhasil selamat eaa|!!'); window.location = 'haladmin.php?page=list'; </script>";
						}
						else {
							echo "<script> alert('hapus gagal|!!'); window.history.back(); </script>";
						}
	}

?>