<?php 
if(isset($_SESSION['login']))
{
	include('koneksi.php');	
}	
	else 
{
	echo "<script> alert('anda belum login kaka !!'); window.history.back(); </script>";
}
?>
	<form action="index.php" method="get">
	<table border="1" width="100" height="100" align="center">
	
	<tr bgcolor="#87CEFA">

	<td>Id Pesanan</td>
	
	<td>Jenis</td>
	
	<td>Tipe</td>
	
	<td>Nama</td>
	
	<td>No Identitas</td>
	
	<td>Kontak</td>
	
	<td>Alamat</td>
	
	<td>Status Konfirmasi</td>
	
	</tr>
<?php
	$query = "select * from pesanan where username='".$_SESSION['username']."'";
	
	$hasil=mysql_query($query) or die (mysql_error());
	
	while($data = mysql_fetch_array($hasil)){
	echo "<tr bgcolor='#ffffff'> 
	<td>".$data['id_pesanan']."</td>
	
	<td>".$data['jenis']."</td>
	
	<td>".$data['tipe']."</td>
	
	<td>".$data['username']."</td>
	
	<td>".$data['no_id']."</td>
	
	<td>".$data['kontak']."</td>
	
	<td>".$data['alamat']."</td>
	
	<td>".$data['status']."</td>
	
	</tr>";	
	}
?>
</form>
</table>
