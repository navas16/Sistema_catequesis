<?php
@session_start();
require("utilidades.class.php");

class nivel_1 extends utilidades
{
	function registrar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones)
	{
		$sql= "insert into nivel_1(nombre_estudiante,apellido_estudiante,edad,nacionalidad,cedula,lugar_nacimiento,estado_nacimiento,fecha_nacimiento,fecha_bautismo,direccion,telefono_fijo,telefono_celular,institucion,grado,seccion,nombre_mama,apellido_mama,nombre_papa,apellido_papa,estado_civil,nombre_catequista,apellido_catequista,observaciones) values('$nombre_estudiante','$apellido_estudiante','$edad','$nacionalidad','$cedula','$lugar_nacimiento','$estado_nacimiento','$fecha_nacimiento','$fecha_bautismo','$direccion','$telefono_fijo','$telefono_celular','$institucion','$grado','$seccion','$nombre_mama','$apellido_mama','$nombre_papa','$apellido_papa','$estado_civil','$nombre_catequista','$apellido_catequista','$observaciones')";

		$ok=mysqli_query($con_bd,$sql);
		if($ok==false){
			$this->validarErrores($con_bd,"nivel_1");
		}
		else
		{
		
		 ?><center>Registrado Exitosamente<center><?php
		}
    }
	function modificar($con_bd,$nombre_estudiante,$apellido_estudiante,$edad,$nacionalidad,$cedula,$lugar_nacimiento,$estado_nacimiento,$fecha_nacimiento,$fecha_bautismo,$direccion,$telefono_fijo,$telefono_celular,$institucion,$grado,$seccion,$nombre_mama,$apellido_mama,$nombre_papa,$apellido_papa,$estado_civil,$nombre_catequista,$apellido_catequista,$observaciones)
    {
	
		$sql="update nivel_1 set nombre_estudiante='$nombre_estudiante',apellido_estudiante='$apellido_estudiante',edad='$edad',nacionalidad='$nacionalidad',cedula='$cedula',lugar_nacimiento='$lugar_nacimiento',estado_nacimiento='$estado_nacimiento',fecha_nacimiento='$fecha_nacimiento',fecha_bautismo='$fecha_bautismo',direccion='$direccion',telefono_fijo='$telefono_fijo',telefono_celular='$telefono_celular',institucion='$institucion',grado='$grado',seccion='$seccion',nombre_mama='$nombre_mama',apellido_mama='$apellido_mama',nombre_papa='$nombre_papa',apellido_papa='$apellido_papa',estado_civil='$estado_civil',nombre_catequista='$nombre_catequista',apellido_catequista='$apellido_catequista',observaciones='$observaciones' where cedula='$cedula'";

		$ok=mysqli_query($con_bd,$sql);
		$sql="$nombre_estudiante $apellido_estudiante $edad $nacionalidad $cedula $lugar_nacimiento $estado_nacimiento $fecha_nacimiento $fecha_bautismo $direccion $telefono_fijo $telefono_celular $institucion $grado $seccion $nombre_mama $apellido_mama $nombre_papa $apellido_papa $estado_civil $nombre_catequista $apellido_catequista $observaciones";
		if($ok==true){
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
		$this->validarErrores($con_bd,"nivel_1");
		}
	
	}

    function buscar($con_bd,$cedula)
    {
        $cedula=$_GET['cedula'];
		$sql="select * from nivel_1 where cedula='$cedula'";
		$ok=mysqli_query($con_bd,$sql);
		$resultado=mysqli_fetch_assoc($ok);

		if($resultado["cedula"]=="")
        {
          ?>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <h1 class="resultado">Estudiante no encontrado en la base de datos</h1>
        <center><a href="../pantallas/buscar_estudiante.html">Regresar</a></center>
          <?php    
        }
		else
		header("Location: ../pantallas/modificar_estudiante.php?nom=$resultado[nombre_estudiante]&ape=$resultado[apellido_estudiante]&eda=$resultado[edad]&nac=$resultado[nacionalidad]&ced=$cedula&lug=$resultado[lugar_nacimiento]&est=$resultado[estado_nacimiento]&fecn=$resultado[fecha_nacimiento]&fecb=$resultado[fecha_bautismo]&dir=$resultado[direccion]&tlff=$resultado[telefono_fijo]&tlfc=$resultado[telefono_celular]&ins=$resultado[institucion]&gra=$resultado[grado]&sec=$resultado[seccion]&nomm=$resultado[nombre_mama]&apem=$resultado[apellido_mama]&nomp=$resultado[nombre_papa]&apep=$resultado[apellido_papa]&estc=$resultado[estado_civil]&nomc=$resultado[nombre_catequista]&apec=$resultado[apellido_catequista]&obs=$resultado[observaciones]");
		
	}


    function listar($con_bd,$cedula)
    {
        $sql="select * from nivel_1";
	    $ok=mysqli_query($con_bd,$sql);
	
    ?>
    <link type="text/css" rel="stylesheet"  href="../css/estilos.css">
    <table class="formulario1" width="80%">
    <tr class="titulo" align="center">
    <td>Nombres Del Estudiante</td>
    <td>Apellidos Del Estudiante</td>
    <td>Edad</td>
    <td>Nacionalidad</td>
    <td>Cédula</td>
    <td>Dirección</td>
    <td>Teléfono</td>
    <td>Editar</td>
    <td>Borrar</td>

    </tr>
    <?php
		while(($datos=mysqli_fetch_assoc($ok))>0)
        {
			
			if($datos["cedula"]==$cedula)
			$clase="class='buscado'";
			else
			$clase="";
			
            echo "<tr $clase>
            <td>$datos[nombre_estudiante]</td>
            <td>$datos[apellido_estudiante]</td>
            <td>$datos[edad]</td>
            <td>$datos[nacionalidad]</td>
            <td>$datos[cedula]</td>
            <td>$datos[direccion]</td>
            <td>$datos[telefono_celular]</td>
            <td align='center'><a href='../controladores/controlador_nivel_1.php?accion=buscar&cedula=$datos[cedula]' ><img src=../icono/índice.png height=15px width=15px> </a></td>
            <td><a href='../controladores/controlador_nivel_1.php?accion=borrar&cedula=$datos[cedula]'><img src=../icono/basura.jpg height=15px width=15px></a></td>
            </tr>";	
		}
		
        echo "</table>";
    }
    
    function borrar($con_bd,$cedula)
    {
         $cedula=$_GET['cedula'];
      $sql="delete from nivel_1 where cedula=$cedula";
	  $ok=mysqli_query($con_bd,$sql);
	  if($ok==true)
      {
		$afectadas=mysqli_affected_rows($con_bd);
		if($afectadas>0)
		$this->listar($con_bd,"");
		else
		echo "No Se Encontro Ningun Estudiante";
	  }else{
	  $this->validarErrores($con_bd,"nivel_1"); 
      }
    }
}
?>
