<?php 
$dbhost = 'localhost';
$dbuser = 'root'; //never use root user in live system
$dbpass = ''; // never use blank or simple password or password same as user name in live system
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
$dbname = 'voirlytic';
mysqli_select_db($conn,$dbname);
?>