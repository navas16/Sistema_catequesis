<?php
session_start();
require("../clases/conexion.class.php");
require("../clases/nivel_2.class.php");
$obj_con=new conexion;
$con_bd=$obj_con->conectar();
$obj_est=new nivel_2;

$nombre_estudiante=@$_POST["nombre_estudiante"];
$apellido_estudiante=@$_POST["apellido_estudiante"];
$edad=@$_POST["edad"];
$nacionalidad=@$_POST["nacionalidad"];
$cedula=@$_POST["cedula"];
$lugar_nacimiento=@$_POST["lugar_nacimiento"];
$estado_nacimiento=@$_POST["estado_nacimiento"];
$fecha_nacimiento=@$_POST["fecha_nacimiento"];
$fecha_bautismo=@$_POST["fecha_bautismo"];
$direccion=@$_POST["direccion"];
$telefono_fijo=@$_POST["telefono_fijo"];
$telefono_celular=@$_POST["telefono_celular"];
$institucion=@$_POST["institucion"];
$grado=@$_POST["grado"];
$seccion=@$_POST["seccion"];
$nombre_mama=@$_POST["nombre_mama"];
$apellido_mama=@$_POST["apellido_mama"];
$nombre_papa=@$_POST["nombre_papa"];
$apellido_papa=@$_POST["apellido_papa"];
$estado_civil=@$_POST["estado_civil"];
$nombre_catequista=@$_POST["nombre_catequista"];
$apellido_catequista=@$_POST["apellido_catequista"];
$observaciones=@$_POST["observaciones"];

switch($_REQUEST["accion"])
{

	case 'registrar':
		$obj_est->registrar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones);
		break;
	case 'modificar':
		$obj_est->modificar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones);
		break;
    case 'buscar':
	    $obj_est->buscar($con_bd,$cedula);
	    break;
	case 'listar':
		$obj_est->listar($con_bd,"");
		break;
    case 'borrar':
        $obj_est->borrar($con_bd,$cedula);
        break;
}
?>