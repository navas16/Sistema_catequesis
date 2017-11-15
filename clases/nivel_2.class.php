<?php
@session_start();
require("utilidades.class.php");

class nivel_2 extends utilidades
{
	function registrar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones)
	{
		$sql= "insert into nivel_2(nombre_estudiante,apellido_estudiante,edad,nacionalidad,cedula,lugar_nacimiento,estado_nacimiento,fecha_nacimiento,fecha_bautismo,direccion,telefono_fijo,telefono_celular,institucion,grado,seccion,nombre_mama,apellido_mama,nombre_papa,apellido_papa,estado_civil,nombre_catequista,apellido_catequista,observaciones) values('$nombre_estudiante','$apellido_estudiante','$edad','$nacionalidad','$cedula','$lugar_nacimiento','$estado_nacimiento','$fecha_nacimiento','$fecha_bautismo','$direccion','$telefono_fijo','$telefono_celular','$institucion','$grado','$seccion','$nombre_mama','$apellido_mama','$nombre_papa','$apellido_papa','$estado_civil','$nombre_catequista','$apellido_catequista','$observaciones')";

		$ok=mysqli_query($con_bd,$sql);
		if($ok==false)
        {
			$this->validarErrores($con_bd,"nivel_2");
		}
		else
		{
		 ?><center>Registrado Exitosamente<center><?php
		}
    }
    
    function modificar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones)
    {
	
		$sql="update nivel_2 set nombre_estudiante='$nombre_estudiante',apellido_estudiante='$apellido_estudiante',edad='$edad',nacionalidad='$nacionalidad',cedula='$cedula',lugar_nacimiento='$lugar_nacimiento',estado_nacimiento='$estado_nacimiento',fecha_nacimiento='$fecha_nacimiento',fecha_bautismo='$fecha_bautismo',direccion='$direccion',telefono_fijo='$telefono_fijo',telefono_celular='$telefono_celular',institucion='$institucion',grado='$grado',seccion='$seccion',nombre_mama='$nombre_mama',apellido_mama='$apellido_mama',nombre_papa='$nombre_papa',apellido_papa='$apellido_papa',estado_civil='$estado_civil',nombre_catequista='$nombre_catequista',apellido_catequista='$apellido_catequista',observaciones='$observaciones' where cedula='$cedula'";

		$ok=mysqli_query($con_bd,$sql);
		$sql="$nombre_estudiante $apellido_estudiante $edad $nacionalidad $cedula $lugar_nacimiento $estado_nacimiento $fecha_nacimiento $fecha_bautismo $direccion $telefono_fijo $telefono_celular $institucion $grado $seccion $nombre_mama $apellido_mama $nombre_papa $apellido_papa $estado_civil $nombre_catequista $apellido_catequista $observaciones";
		if($ok==true)
        {
			$afectadas=mysqli_affected_rows($con_bd);
			if($afectadas>0)
			{
				
				//echo "Cliente modificado correctamente";
				$this->listar($con_bd,$cedula);
				//$respuesta=array(true,$sql);
		        //return $respuesta;
			}
			else
				echo "No Se Modifico Ningun Estudiante";
				$respuesta=array(false,$sql);
		        return $respuesta;	
		}else
		{
		$this->validarErrores($con_bd,"nivel_2");
		}
	
	}

    
     function buscar($con_bd,$cedula)
    {
		$sql="select * from nivel_2 where cedula='$cedula'";
		$ok=mysqli_query($con_bd,$sql);
		$resultado=mysqli_fetch_assoc($ok);

		if($resultado["cedula"]=="")
        {
          ?>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <h1 class="resultado">Estudiante no encontrado en la base de datos</h1>
        <center><a href="../pantallas/buscar_estudiante2.html">Regresar</a></center>
          <?php    
        }
		else
		header("Location: ../pantallas/modificar_estudiante2.php?nom=$resultado[nombre_estudiante]&ape=$resultado[apellido_estudiante]&eda=$resultado[edad]&nac=$resultado[nacionalidad]&ced=$cedula&lug=$resultado[lugar_nacimiento]&est=$resultado[estado_nacimiento]&fecn=$resultado[fecha_nacimiento]&fecb=$resultado[fecha_bautismo]&dir=$resultado[direccion]&tlff=$resultado[telefono_fijo]&tlfc=$resultado[telefono_celular]&ins=$resultado[institucion]&gra=$resultado[grado]&sec=$resultado[seccion]&nomm=$resultado[nombre_mama]&apem=$resultado[apellido_mama]&nomp=$resultado[nombre_papa]&apep=$resultado[apellido_papa]&estc=$resultado[estado_civil]&nomc=$resultado[nombre_catequista]&apec=$resultado[apellido_catequista]&obs=$resultado[observaciones]");
		
	}
}
?>