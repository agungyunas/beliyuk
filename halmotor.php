			<table bORDER="0" width="900" height="50" align="center" >
					
					<?php 
						include('koneksi.php');
						
						$query="select * from orderan where id='Mtr' order by nama asc";

						$hasil = mysql_query($query) or die (mysql_error());
						
						$jumlah_baris = mysql_num_rows($hasil);
						
						$jumlah_record_per_page = 2;
						
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
						
						$query= "select * from orderan where id='Mtr' LIMIT ".$start_num.",".$jumlah_record_per_page."";
							$jumlah= mysql_query($query) or die (mysql_error());
						
						while($tampil=mysql_fetch_array($jumlah)){
					?>	
				<tr>
								<td width="50" height="100" align="center"> <div id="shadow"> <font size="3" color="gray" face="aharoni" align="center"> <?php echo $tampil['ket']; ?> </font> <br>
								<img src="image/<?php echo $tampil['nama']; ?>" width="200" height="200" align="center"><br>
								<div id="harga"><?php echo $tampil['Harga']; ?><br></div>
							<input type="submit" onclick="window.location ='index.php?page=halorder&tipe=<?php echo $tampil['ket'];?>&jenis=Motor'" value="Beli" align="center"><br>
								</div>
								</td>
						
						
					</tr>
					<?php 
								}
								
							echo "<tr> <td align='center'>"; 
	
						echo "<a href='index.php?page=halmotor&page_num=1'> first </a>";
						
								if($page_num==1) {
										echo "<a href='index.php?page=halmotor&page_num=1'> prev </a>";
									}
								else {
									echo "<a href='index.php?page=halmotor&page_num=".($page_num-1)."'> prev </a>";
								}
								
								if($page_num == $jumlah_page) {
										echo "<a href='index.php?page=halmotor&page_num=".$jumlah_page."'> next </a>";
									}
								else {
									echo "<a href='index.php?page=halmotor&page_num=".($page_num+1)."'> next </a>";
								}
								
								echo "<a href='index.php?page=halmotor&page_num=".$jumlah_page."'> last </a>";
								
						echo "</td> </tr>";	
						?>
			</table>		