<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
        
         //datos de acceso
         $host="localhost";
         $usuario="root";
         $contra="";
         $db="users";
         
         //establecer la conexion
        $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $nombre=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $consulta="SELECT id, nombre,contrasena FROM usuarios where nombre='$nombre' AND contrasena='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:pagina.php?login=true");
         }               
      }
?>



<!DOCTYPE html>

<html>
<head>
    <title>Validacion de Formulario PHP</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(../Fondo1.jpg);
}
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 561px;
	top: 127px;
}
.Estilo3 {
	font-family: Cheri;
	color: #0066FF;
	font-size: 24px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 8px;
	top: 9px;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 104px;
	top: 402px;
}
-->
</style></head>

<body>
    <p class="texto">&nbsp;</p>

    <div id="form">
        <div id="Layer1">
          <div id="div">
            <form action="index.php" method=
        "post">
              <p class="Estilo3">Usuario:</p>
              <span class="Estilo3">
              <input name="usuario" type="text">
              <br>
              </span>
              <p class="Estilo3">Contrase&ntilde;a:</p>
              <input name="contra" type="password">
              <br>
              <input name="entrar" type="submit" value="ENTRAR">
              <?php if ($valido==false) {
                echo '<p>Datos incorrectos <br/><a href="index.php">Intente de nuevo</a></p>';
            }?>
            </form>
          </div>
        </div>
        <p>&nbsp;</p>

      <form action="index.php" method=
        "post">
            <p>&nbsp;</p>
      </form>
    </div>
    <div id="Layer3"><a href="../INDEX.php"><img src="../HOME.png" width="196" height="178" border="0"></a></div>
    <div id="Layer2"><img src="../logo.png" alt="logo" width="339" height="335"></div>
</body>
</html>