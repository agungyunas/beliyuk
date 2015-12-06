<!DOCTYPE html>
<?php session_start();
			
if(isset($_SESSION['login']))
{
			include('koneksi.php');
				
			$query = "update akun_user set nama='".$_POST['nama']."',username='".$_POST['username']."',password='".$_POST['password']."',
			no_id='".$_POST['no_id']."',tgl_lahir='".$_POST['tgl_lahir']."', kontak='".$_POST['kontak']."',
			email='".$_POST['email']."',alamat='".$_POST['alamat']."' where username='".$_POST['username']."' ";
			
			$hasil = mysql_query($query) or die ($mysql_error);
			
			if($hasil){
				echo "<script> alert('edit berhasil selamat eaa|!!'); window.location = 'haladmin.php?page=list'; </script>";
			}
			
			else 
			{
				echo "<script> alert('edit gagal|!!'); window.history.back(); </script>";
			}
			
			
}
			
			?>