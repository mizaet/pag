<?php include 'conexion.php';
$con = mysql_connect($dbhost,$dbuser,$dbpassword) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$query = file_get_contents("php://input");
$sth = mysql_query($query);
if (mysql_error())
{
header("HTTP/1.1500 Internal Server Error");
echo $query.'\n';
echo mysql_error();
}
else{
$rows = array();
while($r = mysql_fetch_assoc($sth))
{
$rows[] = $r;
}
print json_encode($rows);
}
?>
