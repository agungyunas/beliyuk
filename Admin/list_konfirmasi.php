<?php
	if($_SESSION['status']=='admin')
{
	include('koneksi.php');
}

?>

<table border="1" width="600" height="400" align="center">
	
	<tr bgcolor="#87CEFA">

	<td>Id Pesanan</td>
	
	<td>Nama Pengirim</td>
	
	<td>Nomor Rekening</td>
	
	<td>Jumlah Transfer</td>
	
	<td>Kontak</td>
	
	<td>Email</td>
	
	<td>Bank</td>
	
	<td>Action</td>
	
	</tr>
<?php
	$query="select * from konfirmasi";

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
	
	$query= "select * from konfirmasi LIMIT ".$start_num.",".$jumlah_record_per_page."";
	$hasil= mysql_query($query) or die (mysql_error());
	
	while ($data = mysql_fetch_array($hasil))
	{
		echo "<tr bgcolor='#fffacd'> 
	<td>".$data['id_nomorpesanan']."</td>
	
	<td>".$data['namapengirim']."</td>
	
	<td>".$data['nomorrek']."</td>
	
	<td>".$data['jumlahtf']."</td>
	
	<td>".$data['kontak']."</td>
	
	<td>".$data['email']."</td>
	
	<td>".$data['bank']."</td>
	
	
	<td>	<a href='haladmin.php?page=edit_pesanan&status=done&id_nomorpesanan=".$data['id_nomorpesanan']."'>konfirmasi</a>/
			<a href='hapus_konfirm.php?id_nomorpesanan=".$data['id_nomorpesanan']."'>hapus</a>
		</td>
	</tr>";
	}
	
	echo "<tr> <td colspan=8 align='center' bgcolor='#87CEFA'>"; 
	
	echo "<a href='haladmin.php?page=list_konfirmasi&page_num=1'> First </a>";
	
			if($page_num==1) {
					echo "<a href='haladmin.php?page=list_konfirmasi&page_num=1'> Prev </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list_konfirmasi&page_num=".($page_num-1)."'> Prev </a>";
			}
			
			if($page_num == $jumlah_page) {
					echo "<a href='haladmin.php?page=list_konfirmasi&page_num=".$jumlah_page."'> Next </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list_konfirmasi&page_num=".($page_num+1)."'> Next </a>";
			}
			
			echo "<a href='haladmin.php?page=list_konfirmasi&page_num=".$jumlah_page."'> Last </a>";
			
	echo "</td> </tr>";
?>

</table>