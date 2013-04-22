<?php
$server="localhost";
$username="root";
$password="";
$database="home_management";

$con=mysql_connect($server,$username,$password);
	mysql_select_db($database,$con);
?>