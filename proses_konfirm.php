<!DOCTYPE html>
<?php session_start(); ?>
		<?php
			include('koneksi.php');
			
					$query = "insert into konfirmasi values ('".$_POST['id_pesanan']."','".$_POST['namapengirim']."','".$_POST['nomorrek']."','".$_POST['jumlahtf']."','".$_POST['kontak']."',
									'".$_POST['email']."','".$_POST['bank']."')";
						
						$hasil=mysql_query($query) or die (mysql_error);
						
						if($hasil){
									echo "<script> alert('Anda berhasil konfirmasi!!'); window.location = 'index.php'; </script>";
						}
						else {
							echo "<script> alert('Anda gagal konfirmasi!!'); window.history.back(); </script>";
						}
					
			
			?>
