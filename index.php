<html>
	<head>
		<link href="css/home.css" type="text/css" rel="stylesheet" />
	
	<!-- jquery library -->
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
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
		
		<?php session_start();	?>
	</head>
		
	<body>
	<table border="0" id="body" align="center">
				<tr>
					<td colspan="4" width="1000" height="100" align="right" id="head"><img src="image/logo/logo3.png" width="50" height="50" > 
					<font size="7" face="aharoni" color="black" align="right"><b>beliYuk.com</font><br>
					<font size="5" face="aharoni" color="white" align="right"><b>Search, order and wait </font> <img src="image/logo/logo2.png" width="50" height="50" align="right">
					</div>
					</td>
					</tr>
				<tr>
			
					<div class="nav cf">
					<li><a href="index.php?page=home"> <font size="3" face="aharoni" color="white"><b> HOME	</a></font></li>
				
					<?php 
					if(!isset($_SESSION['login']))
					{
					?>
					<li><a href="index.php?page=login"> <font size="3" face="aharoni" color="white"><b> LOGIN</a></font></li>
					<li><a href="index.php?page=daftar"> <font size="3" face="aharoni" color="white"><b> DAFTAR	</a></font></li>
					<?php
					}
						else 
							{
					?>
					<li><a href="index.php?page=logout"> <font size="3" face="aharoni" color="white"><b> LOGOUT</a></font></li>
					<li><a href="index.php?page=konfirmasi"><font size="3" face="aharoni" color="white">  KONFIRMASI ORDER </font></a></li>
					<li><font size="3" face="aharoni" color="black" align="right"><?php echo "HI, ".$_SESSION['username']; ?> </font></li>
					<?php
							}
					?>
						
					</div>
				</tr>
				<tr>
					<td align="center" width="300"  height="50"><div id="Gradien"><a href="index.php?page=home"> <font size="5" face="aharoni" color="green"><b> HOME	</a></font></div></td>
					<td align="center" width="300"  height="50"><div id="gradien"><a href="index.php?page=halcars"> <font size="5" face="aharoni" color="green"><b> MOBIL 	</a></div></td>
					<td align="center" width="300"  height="50"><div id="gradien"><a href="index.php?page=halmotor"> <font size="5" face="aharoni" color="green"><b>MOTOR	</a></div></td>
				
					</tr>
				
				<tr>
						
					<td colspan="3" align="right"> 
							<form action="proses_search.php" method="get" id="search" name="search">			
								<input type="text" name="cari">
							</form>
						</td>
				</tr>
					
		<tr>
			<td colspan="3" rowspan="3">
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
	
	</body>
	
	<footer>
	<table id="body" align="center">
				<tr>
					<td  width="300" height="200" align="center"> <div id="foot2"> <font size="3" face="aharoni" align="center" color="green"> yourOrder.com </font><br>
						<font size="3" face="aharoni" color="white"> <a href="index.php?page=daftar"> Daftar </a> </font><br>
						<?php 
						if(isset($_SESSION['login']))
							{
						?>
						<font size="3" face="aharoni" color="white"> <a href="index.php?page=halidpesanan"> Orderan </a> </font><br>
						<font size="3" face="aharoni" color="white"> <a href="index.php?page=konfirmasi"> Konfirmasi Order </a></font><br>
						<font size="3" face="aharoni" color="white"> <a href="index.php?page=logout"> Logout</a> </font>  <br>
						<?php
							}
							else {
						?>
							<font size="3" face="aharoni" color="white"> <a href="index.php?page=login"> Login</a></font>  <br>
							<font size="3" face="aharoni" color="white"> <a href="index.php?page=halmotor"> Motor </a> </font><br>
						<font size="3" face="aharoni" color="white"> <a href="index.php?page=halcars"> Mobil</a></font>  <br>
						<?php
							}
						?>
						
						
					</td> 
				
					<td  width="300" height="200" align="center">
						<div id="foot2">
								<font size="3" color="green" face="aharoni"> Follow us<br>
								<font size="3" face="aharoni" color="white"> <a href="http://twitter.com">twitter</a>  </font> <br>
								<font size="3" face="aharoni" color="white"> <a href="http://facebook.com">facebook</a>  </font> <br>
								<font size="3" face="aharoni" color="white"> <a href="http://instagram.com">instagram</a>  </font> <br>
								<font size="3" face="aharoni" color="white"> <a href="http://google.com">google+</a>  </font> <br>
								</div>
							</td>
					</tr>
						<tr> 
							<td colspan="4" align="center" width="1000"> Copyright &copy; your Online Order @ 2015. Design and Layout by agung & karmedi<br/>
					Ada pertanyaan tentang website ini, hubungi kami di www.yourOrder.com <br/>Atau kunjungi Facebook dan Twitter kami.<br/>
								
						</td>
						</tr>
						</table>
	</footer>
</html>
