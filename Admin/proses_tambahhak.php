<?php session_start(); ?>
		<?php
			include('koneksi.php');
			
					$query = "insert into user_admin (username, password, status) value ('".$_POST['username']."','".$_POST['password']."','admin')";
						
						$hasil=mysql_query($query) or die (mysql_error());
						
						if($hasil){
							echo "<script> alert('Anda berhasil Menambah Hak akses admin!!'); window.location = 'haladmin.php'; </script>";
						}
						else {
							echo "<script> alert('Anda gagal konfirmasi!!'); window.history.back(); </script>";
						}
			
			?>
