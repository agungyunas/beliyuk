<?php session_start(); ?>
		<link href="../css/home.css" type="text/css" rel="stylesheet" />
		<script>
		jQuery("document").ready(function($){
			
			var nav = $('.nav');
			
			$(window).scroll(function () {
				if ($(this).scrollTop()>2) {
					nav.addClass("f-nav");
				} else {
					nav.removeClass("f-nav");
				}
			});
		});
		</script>
	<table border="0" id="body" align="center">
				<tr>
					<td colspan="3" width="1000" height="100" align="right" id="head"><img src="../image/logo/logo3.png" width="50" height="50" > 
					<font size="7" face="aharoni" color="black" align="right"><b>ADMIN</font><br>
					<font size="5" face="aharoni" color="white" align="right"><b>beliYuk.com</font> <img src="../image/logo/logo2.png" width="50" height="50" align="right">
					</div>
					</td>
				</tr>
				
				<div class="nav cf">
				<li><a href="haladmin.php?page=home"> <font size="3" face="aharoni" color="white"><b> HOME	</a></font></li>
				<?php 
					if(!isset($_SESSION['login']))
					{
					?>
					<li><a href="haladmin.php?page=login"> <font size="3" face="aharoni" color="white"><b> LOGIN</a></font></li>
					<?php
					}
						else 
							{
					?>
					<li><a href="haladmin.php?page=logout"> <font size="3" face="aharoni" color="white"><b> LOGOUT</a></font></li>
					<li><font size="3" face="aharoni" color="black" align="right"><?php echo "Welcome, ".$_SESSION['username']; ?> </font></li>
					<?php
							}
					?>
				</div>
				<tr>
				<td align="center" width="300" height="50">
					<div id="Gradien"><a href="haladmin.php?page=updatembl"> <font size="5" face="aharoni" color="green"><b> Update Mobil	</a></font></div>
						</td>	
					<td rowspan="5" colspan="2">
						<?php
							if(!isset($_GET['page']))
							{
								include('home.php');
							}
							else 
							{
								$page=$_GET['page'].".php";
								include($page);
							}
						?>
					</td>
				</tr>
				<tr>
				<td align="center" width="300"  height="50""><div id="Gradien"><a href="haladmin.php?page=updatemtr"> <font size="5" face="aharoni" color="green"><b> Update Motor	</a></font></div></td>
					</tr>
					</tr>
					<td align="center" width="300"  height="50"><div id="gradien"><a href="haladmin.php?page=list"> <font size="5" face="aharoni" color="green"><b> List	</a></div></td>
					</tr>
			<tr>
			<td align="center" width="300"  height="50"><div id="gradien"><a href="haladmin.php?page=list_pesanan"> <font size="5" face="aharoni" color="green"><b> Orderan	</a></div></td>
			</tr>
			
			<tr>
			<td align="center" width="300"  height="50"><div id="gradien"><a href="haladmin.php?page=list_konfirmasi"> <font size="5" face="aharoni" color="green"><b> Konfirmasi	</a></div></td>
			</tr>
	
			<table align="center">
						<tr align="center"> 
							<td colspan="4" align="center" width="1000"> Copyright &copy; your Online Order @ 2015. Design and Layout by agung & karmedi<br/>
					Ada pertanyaan tentang website ini, hubungi kami di www.yourOrder.com <br/>Atau kunjungi Facebook dan Twitter kami.<br/>
								
						</td>
						</tr>
	</table>
