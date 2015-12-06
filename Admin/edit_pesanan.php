<?php
	if($_SESSION['status']=='admin')
{
	include('koneksi.php');
	
	$query = "update pesanan set status='".$_GET['status']."' where id_pesanan='".$_GET['id_nomorpesanan']."'";
	
	$hasil=mysql_query($query) or die (mysql_error());
	
	if($hasil){
						echo "<script> alert('konfirmasi berhasil!!'); window.location = 'haladmin.php?page=list_pesanan'; </script>";
						}
						else {
							echo "<script> alert('konfirmasi gagal|!!'); window.history.back(); </script>";
						}
}

?>