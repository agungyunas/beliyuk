<?php
session_start();

if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "delete from orderan where nama='".$_GET['nama']."'";
	
	$hasil = mysql_query($query) or die (mysql_error);
	
						if($hasil){
									echo "<script> alert('hapus berhasil selamat eaa|!!'); window.location = 'haladmin.php?page=updatembl'; </script>";
						}
						else {
							echo "<script> alert('hapus gagal|!!'); window.history.back(); </script>";
						}
	}

?>