<?php
	if($_SESSION['status']=='admin')
{
	include('koneksi.php');
}

?>

<table border="1" width="600" height="400" align="center">
	
	<tr bgcolor="#87CEFA">

	<td>Id Pesanan</td>
	
	<td>Jenis</td>
	
	<td>Tipe</td>
	
	<td>Username</td>
	
	<td>No Id</td>
	
	<td>Kontak</td>
	
	<td>Alamat</td>
	
	<td>Status</td>
	
	<td>Action</td>
	
	</tr>
<?php
	$query="select * from pesanan";

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
	
	$query= "select * from pesanan LIMIT ".$start_num.",".$jumlah_record_per_page."";
	$hasil= mysql_query($query) or die (mysql_error());
	
	while ($data = mysql_fetch_array($hasil))
	{
		echo "<tr bgcolor='#fffacd'> 
	<td>".$data['id_pesanan']."</td>
	
	<td>".$data['jenis']."</td>
	
	<td>".$data['tipe']."</td>
	
	<td>".$data['username']."</td>
	
	<td>".$data['no_id']."</td>
	
	<td>".$data['kontak']."</td>
	
	<td>".$data['alamat']."</td>
	
	<td>".$data['status']."</td>
	
	<td>
			<a href='hapus_pesanan.php?id_pesanan=".$data['id_pesanan']."'>hapus</a>
		</td>
	</tr>";
	}
	
	echo "<tr> <td colspan=9 align='center' bgcolor='#87CEFA'>"; 
	
	echo "<a href='haladmin.php?page=list_pesanan&page_num=1'> First </a>";
	
			if($page_num==1) {
					echo "<a href='haladmin.php?page=list_pesanan&page_num=1'> Prev </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list_pesanan&page_num=".($page_num-1)."'> Prev </a>";
			}
			
			if($page_num == $jumlah_page) {
					echo "<a href='haladmin.php?page=list_pesanan&page_num=".$jumlah_page."'> Next </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list_pesanan&page_num=".($page_num+1)."'> Next </a>";
			}
			
			echo "<a href='haladmin.php?page=list_pesanan&page_num=".$jumlah_page."'> Last </a>";
			
	echo "</td> </tr>";
?>

</table>