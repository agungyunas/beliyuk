<?php 
if(isset($_SESSION['login']))
{
	include('koneksi.php');
	
	$query = "select * from akun_user where username='".$_GET['username']."'";
	
	$hasil = mysql_query($query) or die (mysql_error());

						if($hasil){
									$data = mysql_fetch_array($hasil);
						
?>
						<table border="0" align= "center">
						<form action="proses_edit.php" method="post">
			
						<tr>
									<td align="left"> 
										<label> Nama Lengkap</label>
									</td>
									
									<td width="10">:</td>
									
									<td>
										<input type="text" name="nama" value="<?php echo $data['nama']; ?>" size="50"><br>
									
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
									<label> Password</label>
										</td>
										
										<td width="10">:</td>
									<td>
										<input type="password" name="password" value="<?php echo $data['password']; ?>" size="50"><br>
									</td>
								
								</tr>
								
								<tr>
									<td align="left"> 
									<label> Konfirmasi Password</label>
										</td>
										
										<td width="10">:</td>
									<td>
										<input type="password" name="confirm" placeholder=" Konfirmasi Password " size="50"><br>
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
										<label>Tanggal Lahir </label>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" size="50"><br>
									
									</td>
								</tr>
								
								
								<tr>
									<td align="left"> 
										<label>Jenis Kelamin </label>
									</td>
									
									<td width="10">:</td>
									
									<td>
										Pria : <input type="radio" name="jenis_kelamin" value="pria"> Wanita :<input type="radio" name="jeniskelamin" value="wanita"><br>
									
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
									 <label>Email </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="email" value="<?php echo $data['email']; ?>" size="50"><br>
									</td>
								</tr>
								
									<tr>
									<td align="left">  
									 <label>Alamat </label><br>
		
									</td>
									<td width="10">:</td>
									<td>
									<textarea name="alamat" rows="4" cols="37" value="<?php echo $data['alamat']; ?>" size="50"></textarea><br>
									</td>
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