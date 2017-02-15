<?
session_start();
$_SESSION["autenticado"] = "no";
session_destroy();
?>
<html>
<head>
<title>Contenido no seguro</title>
<style type="text/css">
<!--
#Layer13 {	position:absolute;
	width:200px;
	height:115px;
	z-index:9;
	left: -667px;
	top: 241px;
}
body {
	background-image: url(../Fondo1.jpg);
}
.Estilo1 {
	font-family: Cheri;
	color: #0033FF;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><span class="Estilo1">sesion finalizada click para regresar al inicio</span><br>
    <br>
      </p>
</div>
<div id="layer">
  <div align="center"><a href="../INDEX.php"><img src="../HOME.png" alt="home" width="202" height="200" border="0" /></a></div>
</div>
</body>
</html>