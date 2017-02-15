<?php
include 'datosConexion.php';
$conexion = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " .
mysql_error());
mysql_select_db($dbname) or die("Error al conectar la base de datos");
?>