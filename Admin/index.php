<?php 
	
	if(!isset($_SESSION['status']))
	{
		include('login.php');
	}
	else if($_SESSION['status'] == 'admin')
	{
		include('haladmin.php');
	}
	
	else {
		include('haladmin.php');
	}

?>