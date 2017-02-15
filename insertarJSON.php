<?php
 include 'conexion.php';
$con = mysql_connect($dbhost,$dbuser,$dbpassword) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$query = file_get_contents("php://input"); mysql_query($query);
?>
