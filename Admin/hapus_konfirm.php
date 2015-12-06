<?php
session_start();

if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "delete from konfirmasi where id_nomorpesanan='".$_GET['id_nomorpesanan]."'";
	
	$hasil = mysql_query($query) or die (mysql_error);
	
						if($hasil){
									echo "<script> alert('hapus berhasil selamat eaa|!!'); window.location = 'haladmin.php?page=list_konfirmasi'; </script>";
						}
						else {
							echo "<script> alert('hapus gagal|!!'); window.history.back(); </script>";
						}
	}

?>