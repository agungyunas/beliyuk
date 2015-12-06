<!DOCTYPE html>
<?php session_start(); ?>
		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$database = "web";
			
			$koneksi = mysql_connect($host, $username, $password)
						or die("Error, Katek Koneksi");
			$db = mysql_select_db($database) or die(mysql_error());
			
					$query = "insert into orderan values ('".$_POST['id']."','".$_POST['nama']."','".$_POST['ket']."','".$_POST['harga']."')";
						
						$hasil=mysql_query($query) or die (mysql_error);
						
						if($hasil){
									echo "<script> alert('Anda berhasil Menambah produk baru!!'); window.location = 'haladmin.php'; </script>";
						}
						else {
							echo "<script> alert('Anda gagal konfirmasi!!'); window.history.back(); </script>";
						}
					
			
			?>