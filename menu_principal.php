<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"><!-- esta etiqueta se utiliza para q las letras especiales trabajen de modo normal en la web-->
 <title>Menu</title>
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

 <div id="banner"><img src="imagenes/iglesia.png" width="100%" height="180px"></div>

<div id="header">
			<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
					<li><a href="menu_principal.php">Inicio</a></li>
					<li><a href="">Nivel 1</a>
						<ul>
							<li><a href="pantallas/registro1.php" target="contenedor">Registrarse</a></li>
							<li><a href="pantallas/buscar_estudiante.html" target="contenedor">Editar</a></li>
							<li><a href="controladores/controlador_nivel_1.php?accion=listar" target="contenedor">Listar</a></li>
							<li><a href="">Constancia</a></li>
						</ul>						
						
					</li>
					<li><a href="">nivel 2</a>
						<ul>
							<li><a href="pantallas/registro2.php" target="contenedor">Registrarse</a></li>
							<li><a href="pantallas/buscar_estudiante2.html" target="contenedor">Editar</a></li>
                            <li><a href="">Listar</a></li>
							<li><a href="">Constancia</a></li>
						</ul>
					</li>
					<li><a href="">Confirmación</a>
						<ul>
							<li><a href="">Registrarse</a></li>
							<li><a href="">Listar</a></li>
							<li><a href="">Editar</a></li>
							<li><a href="">Constancia</a></li>
						</ul>
					</li>
				</ul>
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
		</div>
	</body>
</html>

 <div id="contenedor">
 <iframe  width="100%" height="100%" frameborder="0" name="contenedor" ></iframe>
 </div>

 <div id="pie"></div>

</body>
</html>