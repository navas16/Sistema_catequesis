<html>

<head>
	<meta charset="utf-8">
	<title>Registro Nivel 2</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script src="../javascript/validaciones.js" language="javascript" type="text/javascript"></script>
</head>

<body>

	<form method="POST" action="../controladores/controlador_nivel_2.php" id="for_mod">
    <input name="accion" value="modificar" type="hidden">
	<table class="formulario1">
		<tr>
			<td colspan="2" class="titulo"> Editar Catequizando </td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Personales </td>
		</tr>
		<tr>
			<td> Nombres: </td> 
			<td><input type="text" size="60" maxlength="40" name="nombre_estudiante" id="nombre_estudiante" value="<?php echo $_GET["nom"] ?>" ></td>
		</tr>
		<tr>
			<td> Apellidos: </td>
			<td><input type="text" name="apellido_estudiante" id="apellido_estudiante" size="60" maxlength="30" value="<?php echo $_GET["ape"] ?>"></td>
		</tr>
		<tr>
			<td> Edad: </td>  
			<td>
			 <input type="text" name="edad" id="edad" size="5" maxlength="2" value="<?php echo $_GET["eda"] ?>"> 
			  Nacionalidad:
			 <input type="text" name="nacionalidad" id="nacionalidad" size="11" maxlength="15" value="<?php echo $_GET["nac"] ?>">
			  Cédula: 
			 <input type="text" name="cedula" id="cedula" size="10" maxlength="8" readonly value="<?php echo $_GET["ced"] ?>">
			</td>
		</tr>
		<tr>
			<td> Nació En: </td>
			<td>
			 <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" size="26" value="<?php echo $_GET["lug"] ?>">
              Estado:
             <input type="text" name="estado_nacimiento" id="estado_nacimiento" size="20" value="<?php echo $_GET["est"] ?>">
			</td>

		</tr>
		<tr>
			<td> Fecha De Nacimiento: </td>
			<td>
			 <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" size="30" value="<?php echo $_GET["fecn"] ?>">
			 Fecha De Bautizo:
             <input type="date" name="fecha_bautismo" id="fecha_bautismo" size="30" maxlength="11" value="<?php echo $_GET["fecb"] ?>">
			 </td>
		</tr>
		<tr>
			<td> Direccion: </td>
			<td> <textarea rows="2" cols="50" name="direccion" id="direccion"><?php echo $_GET["dir"] ?></textarea></td>
		</tr>
		<tr>
			<td> Teléfono: </td>
			<td>
			 Fijo:
			 <input type="tel" name="telefono_fijo" id="telefono_fijo" size="20" pattern="[A-Za-z]{4-11}" maxlength="11" value="<?php echo $_GET["tlff"] ?>">
             Celular:
             <input type="text" name="telefono_celular" id="telefono_celular" size="21" pattern="[A-Za-z]{4-11}" maxlength="11" value="<?php echo $_GET["tlfc"] ?>">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Escolares </td>
		</tr>
		<tr>
			<td> Institución: </td>
			<td><input type="text" name="institucion" id="institucion" size="60" value="<?php echo $_GET["ins"] ?>"></td>
		<tr> 
			<td> Grado De Instrucción: </td>
			<td>
			<input type="text" name="grado" id="grado" maxlength="1" pattern="[1-6]" size="22" value="<?php echo $_GET["gra"] ?>">
			Sección:
			<input type="text" name="seccion" id="seccion" maxlength="1" pattern="[A-Da-d]" size="23" value="<?php echo $_GET["sec"] ?>">
			</td> 
		</tr>
		<tr>
			<td  class="subtitulo"> Datos De Los Padres </td>
		</tr>
		<tr>
			<td class="subtitulo"> Madre </td>
        </tr>
		<tr>
			<td> Nombre: </td>
			<td>
				<input type="text" name="nombre_mama" id="nombre_mama" size="22" maxlength="15" value="<?php echo $_GET["nomm"] ?>">
				Apellido:
				<input type="text" name="apellido_mama" id="apellido_mama" size="23" maxlength="15" value="<?php echo $_GET["apem"] ?>">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Padre </td>
        </tr>
		<tr>
			<td > Nombre: </td>
			<td>
				<input type="text" name="nombre_papa" id="nombre_papa" size="22" maxlength="15" value="<?php echo $_GET["nomp"] ?>">
				Apellido:
				<input type="text" name="apellido_papa" id="apellido_papa" size="23" maxlength="15" value="<?php echo $_GET["apep"] ?>">
			</td>
		</tr>
		<tr>
		<td class="subtitulo">Estado Civil:</td>
			<td>
	<select name="estado_civil" id="estado_civil">
        <option value="<?php echo $_GET["estc"] ?>">  <?php echo $_GET["estc"] ?></option>
        <option> Seleccione... </option>
        <option value="Casados Por Civil">Casados Por Civil</option> 
        <option value="Casados Por La Iglesia">Casados Por La Iglesia</option> 
        <option value="No Casados">No Casados</option>  
    </select>
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Del Catequista </td>
		</tr>
		<tr>
			<td> Nombre: </td>
			<td>
				<input type="text" name="nombre_catequista" id="nombre_catequista" size="22" maxlength="15" value="<?php echo $_GET["nomc"] ?>">
				Apellido:
				<input type="text" name="apellido_catequista" id="apellido_catequista" size="22" maxlength="15" value="<?php echo $_GET["apec"] ?>">
			</td>
		</tr>
		<tr>
		 <td class="subtitulo"> Observaciones </td>
		</tr>
		<tr>
			<td></td>
			<td><textarea rows="2" cols="50" name="observaciones" id="observaciones"><?php echo $_GET["obs"] ?></textarea></td>
		</tr> 
		<tr>
        	<td colspan="2" align="center">
        	<button type="submit">Guardar</button>
        	</td>
        </tr>		
	</table>
  </form>
</body>
</html>