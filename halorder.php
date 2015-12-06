<?php 
if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "select * from akun_user where username='".$_SESSION['username']."'";
	
	$hasil = mysql_query($query) or die (mysql_error());

						if($hasil){
							
									$data = mysql_fetch_array($hasil);
						
?>
	<form action="proses_order.php" method="get" ><br>	
	<table bORDER="0" align="center">	
			
								<tr>
									<td colspan="3" align="center">
								
								<font size="5" face="aharoni" color="green"> ORDER </font><br><br>
									
									</td>
								</tr>
							<tr>	
								<td width=200" align="left">  
									<label> Jenis </label>
								</td>
								
								<td width="10">:</td>
								
								<td width="500">
								<input type="text" name="jenis" value="<?php echo $_GET['jenis']; ?>">
								</td>
								</tr>
								
								<tr>
									<td align="left"> 
									<label> Tipe </label>
										</td>
										<td width="10">:</td>
										<td>	
											<input type="text" name="tipe" value="<?php echo $_GET['tipe']; ?>"size="50"><br>
											</td>
								</tr>
								
								<tr>
									<td align="left"> 
										<label> Username</label>
									</td>
									
									<td width="10">:</td>
									
									<td>
										<input type="text" name="username" value="<?php echo $data['username']; ?>" size="50"><br>
									
									</td>
								</tr>
			
								<tr>
									<td align="left"> 
									 <label> No Identitas </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="no_id" value="<?php echo $data['no_id']; ?>" size="50"><br>
									
									</td>
								</tr>
								
								<tr>
									<td align="left">  
									 <label> Kontak </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="kontak" value="<?php echo $data['kontak']; ?>" size="50"><br>
									</td>
								</tr>
								
									<tr>
									<td align="left">  
									 <label>Alamat </label><br>
		
									</td>
									<td width="10">:</td>
									<td>
									<input name="alamat" rows="3" cols="37" value="<?php echo $data['alamat']; ?>" size="50"><br>
									</td>
								</tr>
								
								<tr>
									<td colspan="3" align="center">
								 <input type="reset" value="Reset">
									<input type="submit" value="Kirim">
									</td>
								</tr>
											
			
					</table>
						<form>
				<?php
						}
						else {
							echo "<script> alert('Beli gagal|!!'); window.history.back(); </script>";
						}
	
	}
	
else 
{
	echo "<script> alert('anda belum login kaka !!'); window.history.back(); </script>";
}
?>