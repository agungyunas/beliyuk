<?php
	
	if($_SESSION['status']=='admin')
{
	include('koneksi.php');
}

?>

<table border="1" width="600" height="400" align="center">
	
	<tr bgcolor="#87cefa">

	<td>Username</td>
	
	<td>Identitas</td>
	
	<td>Tanggal Lahir</td>
	
	<td>Jenis Kelamin</td>
	
	<td>Kontak</td>
	
	<td>Email</td>
	
	<td>Alamat</td>
	
	<td>Action</td>
	
	
	</tr>
<?php
	$query="select * from akun_user";

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
	
	$query= "select * from akun_user LIMIT ".$start_num.",".$jumlah_record_per_page."";
	$hasil= mysql_query($query) or die (mysql_error());
	
	while ($data = mysql_fetch_array($hasil))
	{
		echo "<tr bgcolor='#fffacd'> 
	<td>".$data['username']."</td>
	
	<td>".$data['no_id']."</td>
	
	<td>".$data['tgl_lahir']."</td>
	
	<td>".$data['jenis_kelamin']."</td>
	
	<td>".$data['kontak']."</td>
	
	<td>".$data['email']."</td>
	
	<td>".$data['alamat']."</td>
	
	<td>
		<a href='haladmin.php?page=edit_user&username=".$data['username']."'>edit</a>
			<a href='hapus_user.php?username=".$data['username']."'>hapus</a>
		</td>
	</tr>";
	}
	
	echo "<tr> <td colspan=8 align='center' bgcolor='#87cefa'>"; 
	
	echo "<a href='haladmin.php?page=list&page_num=1'> First </a>";
	
			if($page_num==1) {
					echo "<a href='haladmin.php?page=list&page_num=1'> Prev </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list&page_num=".($page_num-1)."'> Prev </a>";
			}
			
			if($page_num == $jumlah_page) {
					echo "<a href='haladmin.php?page=list&page_num=".$jumlah_page."'> Next </a>";
				}
			else {
				echo "<a href='haladmin.php?page=list&page_num=".($page_num+1)."'> Next </a>";
			}
			
			echo "<a href='haladmin.php?page=list&page_num=".$jumlah_page."'> Last </a>";
			
	echo "</td> </tr>";
?>

</table>