<html>
<head>
	<meta charset="utf-8">
	<title>Registro Nivel 1</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script src="../javascript/validaciones.js" language="javascript" type="text/javascript"></script>
</head>
<body>
	<form method="POST" action="../controladores/controlador_nivel_1.php" id="formulario_registro_1">
  <input name="accion" value="registrar" type="hidden">
	<table class="formulario1">
		<tr>
			<td colspan="2" class="titulo"> Diócesis De San Cristóbal<br>Parroquia San Juan Bautista De Ureña<br>Primera Comunión 2017<br><B>FICHA DEL CATEQUIZANDO</B></td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Personales </td>
		</tr>
		<tr>
			<td> Nombres: </td> 
			<td><input type="text" name="nombre_estudiante" id="nombre_estudiante" size="60" maxlength="40" required></td>
		</tr>
		<tr>
			<td> Apellidos: </td>
			<td><input type="text" name="apellido_estudiante" id="apellido_estudiante" size="60" maxlength="30" required></td>
		</tr>
		<tr>
			<td> Edad: </td>  
			<td>
			 <input type="text" name="edad" id="edad" size="3" maxlength="2" max="2" required> 
			  Nacionalidad:
			 <input type="text" name="nacionalidad" id="nacionalidad" size="11" maxlength="15" required>
			  Cédula: 
			 <input type="number" name="cedula" id="cedula" size="10" maxlength="8" required>
			</td>
		</tr>
		<tr>
			<td> Nació En: </td>
			<td>
			 <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" size="26" required>
              Estado:
             <input type="text" name="estado_nacimiento" id="estado_nacimiento" size="20" required>
			</td>

		</tr>
		<tr>
			<td> Fecha De Nacimiento: </td>
			<td>
			 <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" size="30" required>
			 Fecha De Bautizo:
             <input type="date" name="fecha_bautismo" id="fecha_bautismo" size="30" maxlength="11" required>
			 </td>
		</tr>
		<tr>
			<td> Direccion: </td>
			<td> <textarea rows="2" cols="50" name="direccion" id="direccion" required></textarea></td>
		</tr>
		<tr>
			<td> Teléfono: </td>
			<td>
			 Fijo:
			 <input type="tel" name="telefono_fijo" id="telefono_fijo" size="20" maxlength="11">
             Celular:
             <input type="text" name="telefono_celular" id="telefono_celular" size="21" maxlength="11">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Escolares </td>
		</tr>
		<tr>
			<td> Institución: </td>
			<td><input type="text" name="institucion" id="institucion" size="60"></td>
		<tr> 
			<td> Grado De Instrucción: </td>
			<td>
			<input type="text" name="grado" id="grado" maxlength="1" pattern="[1-6]" size="22">
			Sección:
			<input type="text" name="seccion" id="seccion" maxlength="1" pattern="[A-Da-d]" size="23">
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
				<input type="text" name="nombre_mama" id="nombre_mama" size="22" maxlength="15">
				Apellido:
				<input type="text" name="apellido_mama" id="apellido_mama" size="23" maxlength="15">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Padre </td>
        </tr>
		<tr>
			<td > Nombre: </td>
			<td>
				<input type="text" name="nombre_papa" id="nombre_papa" size="22" maxlength="15">
				Apellido:
				<input type="text" name="apellido_papa" id="apellido_papa" size="23" maxlength="15">
			</td>
		</tr>
		<tr>
			<td class="subtitulo">Estado Civil:</td>
			<td>
			<select name="estado_civil" id="estado_civil" required>
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
				<input type="text" name="nombre_catequista" id="nombre_catequista" size="22" maxlength="15">
				Apellido:
				<input type="text" name="apellido_catequista" id="apellido_catequista" size="22" maxlength="15">
			</td>
		</tr>
		<tr>
		 <td class="subtitulo"> Observaciones </td>
		</tr>
		<tr>
			<td></td>
			<td><textarea rows="2" cols="50" name="observaciones_esttudiante" id="observaciones_esttudiante"></textarea></td>
		</tr> 
		<tr>
        	<td colspan="2" align="center">
        	<button type="submit"> Guardar </button>
        	</td>
        </tr>		
	</table>
  </form>
</body>
</html>