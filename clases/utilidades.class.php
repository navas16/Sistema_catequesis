<?php
class utilidades
{

	function validarErrores($conexion,$tabla)
	{
	$error=mysqli_errno($conexion); //extraigo el codigo de error
	
		switch($error){
		case '1146': echo "El nombre de la tabla esta incorrecto. Error en $tabla";	break;
		case '1136': echo "La cantidad de columnas no coincide con la cantidad de valores. Error en $tabla";	break;
		case '1064': echo "Error de sintaxis, revisa con detenimiento la sentencia. Error en $tabla";	break;
		case '1062': echo "Error: El $tabla ya se encuentra registrado";	break;
		default: echo "Error Desconocido. Investigar en la documentacion el error numero $error";	break;
		
	    }
	}
}	