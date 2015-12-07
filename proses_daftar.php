<!DOCTYPE html>
<?php session_start(); ?>
		<?php
			include('koneksi.php');
				
			$query = "select * from akun_user where username='".$_POST['username']."'";
			
			$hasil = mysql_query($query) or die ($mysql_error());
			
			$hitung = mysql_num_rows($hasil);
			
			if($hitung == 0){
				if($_POST['password'] == $_POST['confirm'])
				{
					$query = "insert into akun_user (nama, username, password, no_id, tgl_lahir, jenis_kelamin, kontak, email, alamat) value ('".$_POST['nama']."',
					'".$_POST['username']."','".$_POST['password']."','".$_POST['no_id']."',
					'".$_POST['tgl_lahir']."','".$_POST['jenis_kelamin']."','".$_POST['kontak']."',
						'".$_POST['email']."','".$_POST['alamat']."')";
						
						$hasil=mysql_query($query) or die ($mysql_error());
						
						if($hasil){
							echo "<script> alert('register berhasil selamat !!'); window.location = 'index.php?page=login'; </script>";
						}
						else {
							echo "<script> alert('register gagal!!'); window.history.back(); </script>";
						}
						
				}
				
				else {
					echo "<script> alert('Password anda tidak sama'); window.history.back(); </script>";
				}
			}
			else  
			{
				echo "<script> alert('Username telah digunakan'); window.history.back(); </script>";
			}
			
			?>
