
				
	<table bORDER="0" align="center">
			
			<form action="proses_konfirm.php" method="post" name="cekForm" onsubmit="return cekFile()"><br>	
								<tr>
									<td colspan="3" align="center">
								
								<font size="5" face="aharoni" color="green"> KONFIRMASI </font><br><br>
									
									</td>
								</tr>	

								<tr>
									<td align="left"> 
										<label> Id Pesanan </label>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<select name="id_pesanan">
									<?php 
									include('koneksi.php');
									$query="select * from pesanan where username='".$_SESSION['username']."' order by id_pesanan";
									$hasil = mysql_query($query) or die (mysql_error());
									while($data=mysql_fetch_array($hasil)){
									?>
									
										<option value="<?php echo $data['id_pesanan'];?>"><?php echo $data['id_pesanan'];?></option>
									<?php
									}
									?>
									</select>
									</td>

								</tr>
								
								<tr>
									<td align="left"> 
										<label> Rekening atas Nama </label>
									</td>
									
									<td width="10">:</td>
									
									<td>
										<input type="text" name="namapengirim" placeholder=" Rekening atas Nama " size="50"><br>
									
									</td>
								</tr>
								
								<tr>
									<td align="left"> 
									<label> Nomor Rekening  </label>
										</td>
										
										<td width="10">:</td>
									<td>
										<input type="text" name="nomorrek" placeholder=" Nomor Rekening " size="50"><br>
									</td>
								
								
								<tr>
									<td align="left"> 
									 <label> Jumlah Transfer </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="jumlahtf" placeholder=" Jumlah Transfer " size="50"><br>
									
									</td>
								</tr>
								
								<tr>
									<td align="left">  
									 <label> Kontak </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="kontak" placeholder=" Kontak " size="50"><br>
									</td>
								</tr>
								
								<tr>
									<td align="left">  
									 <label>Email </label><br>
									</td>
									
									<td width="10">:</td>
									
									<td>
									<input type="text" name="email" placeholder=" Email " size="50"><br>
									</td>
								</tr>
								<td align="left"> 
								<label> Bank </label><br>
								</td>
								<td width="10">:</td>
										<td>
											<select name="bank">
															<option value="mandiri">Mandiri</option>
															<option value="bni">BNI</option>
															<option value="bri">BRI</option>
															<option value="bca">BCA</option>
														</select> <br>
										</td>
								
								<tr>
									<td align="left"> 
									&nbsp;
									</td>
									<td width="10">&nbsp;</td>
									<td>
								 <input type="reset" value="Reset" name="reset">
									<input type="submit" value="Kirim" name="pesan">
									</td>
								</tr>
					
					<form>
					</table>