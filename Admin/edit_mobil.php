<?php 
if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "select * from orderan where nama='".$_GET['nama']."'";
	
	$hasil = mysql_query($query) or die (mysql_error());

						if($hasil){
									$data = mysql_fetch_array($hasil);
						
?>
						<table border="0" align= "center">
						<form action="proses_mobil.php" method="post">
			
						<tr>
							<td align="right">Id: </td>
							<td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
						</tr>
						<tr>
							<td align="right">Nama: </td>
							<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
						</tr>
						
						<tr>
							<td align="right">Ket: </td>
							<td><input type="text" name="ket" value="<?php echo $data['ket']; ?>"></td>
						</tr>
						<tr>
							<td align="right">Harga: </td>
							<td><input type="text" name="harga" value="<?php echo $data['Harga']; ?>"></td>
						</tr>
						<tr>
							<td align="center" colspan="3">
								<input type="submit" value="Edit"></input>
								<input type="reset" value="Reset"></input>
							</td>
						</tr>
						</form>
					</table>

<?php
						}
						else {
							echo "<script> alert('edit gagal|!!'); window.history.back(); </script>";
						}
	
	}
	
else 
{
	echo "<script> alert('anda belum login kaka !!'); window.history.back(); </script>";
}
?>