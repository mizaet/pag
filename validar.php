
<html>
        <head>
             <meta http-­‐equiv="content-­‐type" content="text/html; charset=utf‐8"/>
             <link rel="stylesheet" type="text/css" href="estilo.css">
             <?php include "conexion.php"; ?>
             <style type="text/css">
<!--
.Estilo1 {
	font-family: "Action Jackson";
	color: #0099FF;
}
body {
	background-image: url(FONDO.jpg);
}
-->
             </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
           <body>
                 <h1 class="Estilo1">INGRESAR</h1>
              <?php
              session_start();
              $_SESSION['valida']= 'false';
              
                    $nombre = $_POST["nombre"];
                    
                    $clave = $_POST["clave"];
                    
                   
               $result = mysql_query('SELECT clave, usuario FROM usuarios WHERE usuario=\''.$nombre.'\'');
               if($row = mysql_fetch_array($result)){
                if($row["clave"] == $clave){
					$_SSESION['nombre'] = $_POST['nombre'];
					$_SESSION['clave']= $_POST['clave'];
					$_SESSION['valida']='true';
                  $_SESSION["k_username"] = $row['usuario'];
                echo 'Has sido logueado correctamente 
     '.$_SESSION['k_username'].' <p>';
       echo '<a href="usuarios.php">Ir</a></p>';
   }else {
	   echo 'Clave incorrecta';
	   echo '<a href="login_usuario.php">    Regresar </a></p>';
   }
}else{
	echo '<Center><h2>Usuario no existe en la base de datos</h2></Center>';
	echo ' <p></p>';
	echo '<a href="login_usuario.php">    Regresar </a></p>';
}

mysql_close();
?>
</body>
</html>
