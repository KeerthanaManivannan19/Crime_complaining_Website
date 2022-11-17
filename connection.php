<?php
session_start();
define('SITEURL','');
define('LOCALHOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DB_NAME','crime_complaint_system');
$conn=mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error());
$dbselect=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>