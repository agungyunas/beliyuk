<!DOCTYPE html>
<?php session_start();
			
if(isset($_SESSION['login']))
{
			include('koneksi.php');
				
			$query = "update orderan set id='".$_POST['id']."',nama='".$_POST['nama']."',ket='".$_POST['ket']."',Harga='".$_POST['harga']."' where nama='".$_POST['nama']."' ";
			
			$hasil = mysql_query($query) or die ($mysql_error);
			
			if($hasil){
				echo "<script> alert('edit berhasil selamat eaa|!!'); window.location = 'haladmin.php?page=updatembl'; </script>";
			}
			
			else 
			{
				echo "<script> alert('edit gagal|!!'); window.history.back(); </script>";
			}
			
			
}
			
			?>