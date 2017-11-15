<?php
@session_start();
class conexion
{
	function conectar()
	{
		$conexion=mysqli_connect("localhost","root","");
		if($conexion==false)
		{
			echo "Error Al Conectarse Al Servidor";
		}
		else
		{
			$bd=mysqli_select_db($conexion,"sistema_control");
		}
		if($bd==false)
		{
			echo "Error Al Conectarse A La Base Datos";
		}
		else
		{
			return $conexion;
		}
	}

	function iniciar_sesion($con_bd,$usuario,$clave)
	{
		$sql="select * from usuario where ema_usu='$usuario' and cla_usu='$clave'";
		$ok=mysqli_query($con_bd,$sql);
		$datos=mysqli_fetch_assoc($ok);
	    
	    	if($datos["est_usu"]=="A")
		{
		  $_SESSION["usuario"]=$usuario;
		  return true;
		}else
		 return false;
				
    }
}
?>