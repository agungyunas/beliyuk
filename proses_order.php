<!DOCTYPE html>
		<?php
			include('koneksi.php');
			
			function ryRandom($muncul){

			if($muncul == '8'){
				$ryRandom = rand(11111111,99999999); 
			}
			else{
				$ryRandom = "Random belum di setting";
			}
				return $ryRandom;
			}
			
			$jenis=$_GET['jenis'];
			$tipe=$_GET['tipe'];
			$username=$_GET['username'];
			$no_id=$_GET['no_id'];
			$kontak=$_GET['kontak'];
			$alamat=$_GET['alamat'];
			$nomorpesanan= ryRandom(8);
			
			if(isset($_GET['tipe'])){
					
			$query = "insert into pesanan (id_pesanan, jenis, tipe, username, no_id, kontak, alamat) 
						value('".$nomorpesanan."','".$jenis."','".$tipe."','".$username."','".$no_id."','".$kontak."','".$alamat."')"; 
			
			$hasil = mysql_query($query) or die (mysql_error());
			
				if($hasil){
					echo "<script> alert('Anda berhasil Order!!'); window.location = 'index.php?halidpesanan'; </script>";
				}
				else  
				{
					echo "<script> alert('Anda gagal Order!!'); window.history.back(); </script>";
				}
			}
			
			else {
				echo "<script> alert('Silahkan isi data secara lengkap!!'); window.history.back(); </script>";
			}
			?>
