 
   <link href="./css/nivo-slider.css" rel="stylesheet">
    <!-- row -->
    <div id="slider" class="nivoSlider templatemo_slider">
    
	<?php include ('koneksi.php');
    $qslide = mysql_query("SELECT * FROM slide WHERE status = 'enable' ORDER BY RAND()");
    
	while ($dataslide = mysql_fetch_array($qslide)) {
    ?>
    <img src="image/<?php echo $dataslide['img_slide'] ?>" alt="<?php echo $dataslide['judul_slide'] ?>" />
    <?php
    }
    ?>
    </div>
	
    <style type="text/css">
    .templatemo_slider {
    top: -10px;
    position: relative;
    width: 60%;
    left: 20.1%;
    }
	
	.nivo-prevNav{
	background: url(./logo/slide.jpg) top left no-repeat;
	left: 8%;
	}
	.nivo-nextNav{
	background: url(./logo/slide.jpg) top right no-repeat;
	right: 85%;
	}

    </style>
	
    <!-- // END row-app -->
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider({
    prevText: '',
    nextText: '',
    controlNav: false,
    pauseOnHover: false,
    });
    });
    </script>


<table Border="0" width="900" height="200" align="center">
				
				<tr height="200">  
						<td colspan="2" width="500" height="300" align="center">
						<font size="5" face="times new roman"> <a href="index.php?page=lamborgini"><b> Lamborgini </a> </font><br>
						<a href="index.php?page=halcars"><img src="image/aventador copy.png" width="350" height="200" align="center"></a> 
						</td>
									<td colspan="2" width="500" height="300" align="center">
									<font size="5"  face="times new roman" > <a href="index.php?page=yamaha"><b> Yamaha </a> </font> <br>
									<a href="index.php?page=halmotor"><img src="image/fjr copy.png" width="350" height="200" align="center"></a>
									</td>	
					</tr>
				<tr height="200">
					<td colspan="2" width="500" height="300" align="center"> <font size="5" face="times new roman"> <a href="index.php?page=porsche"><b> Porsche </a> </font> <br>
					<a href="index.php?page=halcars"><img src="image/porsche 911 copy.png" width="350" height="200" align="center"></a></td>
									<td colspan="2" width="500" height="300" align="center"> <font size="5"  face="times new roman" > <a href="index.php?page=kawasaki"><b> Kawasaki </a> </font> <br>
									<a href="index.php?page=halmotor"><img src="image/bruteforce copy.png" width="350" height="200" align="center"></a></td>
									
							
					</tr>
				<tr height="200">
					<td colspan="2" width="500" height="300" align="center"> <font size="5" face="times new roman"> <a href="index.php?page=ferrari"><b>Ferrari </a> </font>  
					<br> <a href="index.php?page=halcars"><img src="image/ferrari 458 copy.png" width="350" height="200" align="center"></a></td>
								<td colspan="2" width="500" height="300" align="center"><br><a href="index.php?page=ducati"><font size="5"  face="times new roman"><b>Ducati </a> </font><br>
									<a href="index.php?page=halmotor"><img src="image/ducati copy.png" width="300" height="200" align="center"></a></td>
					</tr>
</table>