<?php session_start(); ?>
		<?php
			include('koneksi.php');
				
			$query = "select * from akun_user where username='".$_POST['username']."'";
			
			$hasil = mysql_query($query) or die ($mysql_error());
			
			$hitung = mysql_num_rows($hasil);
			
			if($hitung == 0){
			
					$query = "insert into user_admin (username, password, status) value ('".$_POST['username']."','".$_POST['password']."','admin')";
						
						$hasil=mysql_query($query) or die ($mysql_error());
						
						if($hasil){
							echo "<script> alert('register berhasil selamat !!'); window.location = 'haladmin.php'; </script>";
						}
						else {
							echo "<script> alert('register gagal!!'); window.history.back(); </script>";
						}
						
				}
				
			}
			else  
			{
				echo "<script> alert('Username telah digunakan'); window.history.back(); </script>";
			}
			
			?>
