<?php
//host yang digunakan
//99,9% tidak perlu dirubah
$host = 'br-cdbr-azure-south-a.cloudapp.net'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'b5cfd164543a2e'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = '6af6daa5';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname = 'acsm_6ab719fe97915dd';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname) or die(mysql_error());
?>
