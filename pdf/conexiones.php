<?php
/*
Conexion a base de datos
Creado Por: Juan Carlos Patiño
Fecha: Agosto 2017
WEB: www.yaposoluciones.com/jcp/index.php
Correo: jcpinversiones@gmail.com	
*/

function conectar(){
	
    
    $user="root";
    $pass="speedtouch";
    $server="localhost";
    $db="sistema_control";
    $con= mysql_connect($server,$user,$pass) or die("Tenemos un error al conectar a la base de datos".mysql_error());
    mysql_select_db($db,$con);
    
    mysql_query ("SET NAMES 'utf8'");
    
    
    return $con;
}


?>