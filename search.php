			<table bORDER="0                                                                                                                                                                                                                                                                                                    " width="900" height="50" align="center" >
					
					<?php 
						include('koneksi.php');
						
						
						$query= "select * from orderan where nama LIKE '".$_GET['search']."%'";
							$jumlah= mysql_query($query) or die (mysql_error());
						
						while($tampil=mysql_fetch_array($jumlah)){
					?>	
				<tr>
								<td width="50" height="100" align="center"> <div id="shadow"> <font size="3" color="gray" face="aharoni" align="center"> <?php echo $tampil['ket']; ?> </font> <br>
								<img src="image/<?php echo $tampil['nama']; ?>" width="200" height="200" align="center"><br>
								<div id="harga"><?php echo $tampil['Harga']; ?><br></div>
							<input type="submit" onclick="window.location ='index.php?page=halorder&tipe=<?php echo $tampil['ket'];?>'" value="Beli" align="center"><br>
								</div>
								</td>
						
						
					</tr>
					<?php 
								}
						?>
			</table>		