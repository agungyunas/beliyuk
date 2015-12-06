			<table bORDER="0                                                                                                                                                                                                                                                                                                    " width="900" height="50" align="center" >
					
					<?php 
						include('koneksi.php');
						
						
						$query= "select * from orderan where nama LIKE '".$_GET['cari']."%'";
							$jumlah= mysql_query($query) or die (mysql_error());
						
						if($jumlah){
							echo "<script> window.location = 'index.php?page=search&search=".$_GET['cari']."'; </script>";
							}
							else  
							{
								echo "<script> alert('Anda gagal search!!'); window.history.back(); </script>";
							}	
						?>
			</table>		