<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/php/pass.php");
$host = "localhost";
$db   = "painelhkh";
$user = "root";
$con = mysql_pconnect($host, $user, $pass);
mysql_select_db($db, $con);

$mysqli = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
