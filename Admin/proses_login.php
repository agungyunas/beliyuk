<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<body>
	<br><br><br>
	<table border="0" align="center">
		<?php
			include('koneksi.php');
			
			$query = " SELECT * FROM user_admin where username = '".$_POST['username']."' && password = '".$_POST['password']."' && status ='admin'";
			
			$hasil = mysql_query($query) or die('Query Error');
			$hitung = mysql_num_rows($hasil);
			
			if($hitung > 0){
				$data = mysql_fetch_array($hasil);
				echo "<script>
						alert('Login Berhasil! Selamat Datang ".$data['username']."');
						window.location = 'haladmin.php'
				</script>";
				$_SESSION['status'] = admin;
				$_SESSION['login']=1;
				$_SESSION['username']=$data['username'];
				
			}
			else{
				echo "<script>
						alert('Login Gagal');
						window.history.back();
				</script>";
			}
		?>
	</table>
	</body>
</html>
