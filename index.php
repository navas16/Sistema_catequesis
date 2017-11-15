<?php
session_start();
if (@$_GET["salir"]==1)
{
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title> Sistema De Control </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body background="imagenes/fondo.jpg">
	<form name="formulario" id="formulario" method="POST" action="controladores/controlador_entrada.php">
	<table class="formulario1">
		<tr>
			<td colspan="2" align="center"><b>Inicio Sesión</b></td>
		</tr>
		<tr>
			<td> Usuario: </td>
			<td><input type="text" name="email" id="email" placeholder="Correo Electronico" size="30" ></td>
		</tr>
		<tr>
			<td> Contraseña: </td>
			<td><input type="password" name="clave" id="clave" placeholder="Contraseña" size="30" maxlength="8"></td>
		</tr>
		<tr >
			<td colspan="2" align="center"><input type="submit" value="Entrar"></td>
		</tr>
	</table>
</form>
</body>
</html>