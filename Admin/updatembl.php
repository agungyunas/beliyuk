<?php
	if($_SESSION['status']=='admin')
{
	include('koneksi.php');
}
	else{
		echo "<script> alert('anda belum login!'); window.history.back(); </script>";
	}

?>

<table border="1" width="600" height="400" align="center">
	
	<tr bgcolor="#87cefa">

	<td>Id</td>
	
	<td>Nama</td>
	
	<td>Keterangan</td>
	
	<td>Harga</td>
	
	<td>Aksi</td>
	
	</tr>
<?php
	$query="select * from orderan where id='Mbl'";

	$hasil = mysql_query($query) or die (mysql_error());
	
	$jumlah_baris = mysql_num_rows($hasil);
	
	$jumlah_record_per_page = 4;
	
	$jumlah_page = ceil($jumlah_baris/$jumlah_record_per_page);
	
	if(!isset($_GET['page_num'])){
		$page_num=1;
	}
	else if ($_GET['page_num'] < 1) {
		$page_num=1;
	}
	else if($_GET['page_num'] > $jumlah_page){
		$page_num=$_GET['page_num'];
	}
	
	else {
		$page_num= $_GET['page_num'];
	}
	
	$start_num= ($page_num-1)*$jumlah_record_per_page;
	
	$query= "select * from orderan where id='Mbl' LIMIT ".$start_num.",".$jumlah_record_per_page."";
	$hasil= mysql_query($query) or die (mysql_error());
	
	while ($data = mysql_fetch_array($hasil))
	{
		echo "<tr bgcolor='#fffacd'> 
	<td>".$data['id']."</td>
	
	<td>".$data['nama']."</td>
	
	<td>".$data['ket']."</td>
	
	<td>".$data['Harga']."</td>
	
	<td>
		<a href='haladmin.php?page=edit_mobil&nama=".$data['nama']."'>edit</a>
			<a href='hapus_mbl.php?nama=".$data['nama']."'>hapus</a>
		</td>
	</tr>";
	}
	
	echo "<tr> <td colspan=5 align='center' bgcolor='#87cefa'>"; 
	
	echo "<a href='haladmin.php?page=updatembl&page_num=1'> First </a>";
	
			if($page_num==1) {
					echo "<a href='haladmin.php?page=updatembl&page_num=1'> Prev </a>";
				}
			else {
				echo "<a href='haladmin.php?page=updatembl&page_num=".($page_num-1)."'> Prev </a>";
			}
			
			if($page_num == $jumlah_page) {
					echo "<a href='haladmin.php?page=updatembl&page_num=".$jumlah_page."'> Next </a>";
				}
			else {
				echo "<a href='haladmin.php?page=updatembl&page_num=".($page_num+1)."'> Next </a>";
			}
			
			echo "<a href='haladmin.php?page=updatembl&page_num=".$jumlah_page."'> Last </a>";
			
	echo "</td> </tr>";
	
	echo "<tr> <td colspan=5 align='center' bgcolor='#87cefa'>"; 
	echo "<a href='haladmin.php?page=new_produk'> New </a>";
	echo "</td> </tr>";
?>

</table>