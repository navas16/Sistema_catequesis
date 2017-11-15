<?php
require("../clases/conexion.class.php");
$objConexion=new conexion;
$con_bd=$objConexion->conectar();

$resultado=$objConexion->iniciar_sesion($con_bd,$_POST["email"],$_POST["clave"]);


if($resultado==true)
   header("Location: ../menu_principal.php");
    else
	 {
	   echo "<div align='center'>Usuario o Clave inválidas, inténtelo nuevamente</div>";	
	   echo "<div align='center'><a href='../index.php'>Volver</a></div>";
	 }

?> 