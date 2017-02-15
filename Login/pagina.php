<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
    
}
$_SESSION["usuario"];
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Validacion de Formulario PHP</title>
	    <link href="css/estilo.css" rel="stylesheet" type="text/css">
		<?php include 'conexion.php';?>
	    <style type="text/css">
			body{
	background:url('img/fondo2.jpg');
	background-image: url(../Fondo1.jpg);
	    			}
	    #Layer1 {
	position:absolute;
	width:287px;
	height:25px;
	z-index:1;
	left: 909px;
	top: -2px;
}
        .Estilo1 {
	font-family: Cheri;
	color: #0033FF;
}
        #Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 5px;
	top: 4px;
}
        #Layer3 {
	position:absolute;
	width:580px;
	height:235px;
	z-index:3;
	left: 452px;
	top: 119px;
}
        #Layer4 {
	position:absolute;
	width:405px;
	height:115px;
	z-index:3;
	left: 520px;
	top: 135px;
}
        #Layer5 {
	position:absolute;
	width:127px;
	height:24px;
	z-index:1;
	left: 408px;
	top: -65px;
}
        #Layer6 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 461px;
	top: 263px;
}
        #Layer7 {
	position:absolute;
	width:414px;
	height:36px;
	z-index:3;
	left: 532px;
	top: 259px;
}
        .Estilo3 {font-family: Cheri; color: #0033FF; font-size: 18px; }
        .Estilo4 {font-family: Cheri; color: #993300; font-size: 18px; }
        #Layer8 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 443px;
	top: 137px;
}
        </style>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
    <p class="texto">&nbsp;</p>
    <p class="texto">&nbsp;</p>
    <div id="Layer1">
      <p class="texto"><span class="Estilo1">BIENVENIDO :</span> <span class="Estilo1"><?php echo $_SESSION["usuario"]; ?></span></p>
      <p class="Estilo1"><a href="salir.php">cerrar sesion</a></p>
</div>
    <p></p>
    <p></p>
    <p></p>
    <p align="center"></p>
    <div id="saul"></div>
        <div id="social">            </div>
           <div class="Estilo3" id="Layer2">
             <div align="center"><img src="../logo.png" alt="logo" width="352" height="331"></div>
           </div>
            <div align="center"><span class="Estilo3">
                <div class="Estilo2" id="Layer4">
                <?php 
           $result = mysql_query("select * from usuarios where nombre ='".$_SESSION["usuario"]."' ", $conexion) or die("no se puede ejecutar la consulta: ".mysql_error());; 
           ?>
                <table>
                </span>
            </div>
            <thead>
                           <tr> 
                               
                               <th class="Estilo3" scope='col'><div align="center">NOMBRE </div></th>
							  <th> </th>
							  <th> </th>
							  <th> </th>
							  <th> </th>
							  <th> </th>
                               <th class="Estilo3" scope='col'><div align="center">EVALUACION</div></th>
                           </tr>
      </thead>
                       <tbody>
                         <div align="center">
                           <?php
               while (($row = mysql_fetch_row($result)) !== false)
               {
                  echo "<tr>";
                  echo "<td>$row[1]</td>";
				  
                  echo "<th><th><th><th><th><td>$row[2]</td></th></th></th></th></th></tr>";
                  
}
echo "</tbody>
      </table>";
mysql_close($conexion);
?>                       
                         </div>
                       <tbody>
<div class="Estilo4" id="Layer7">
  <p align="center"><?php echo $_SESSION["usuario"]; ?> te agradecemos que hayas calificado esta aplicacion </p>
  </div>
                       <div align="center"><span class="Estilo3">
                       </div>
                       </span>
                       </div>
</body>
</html>



