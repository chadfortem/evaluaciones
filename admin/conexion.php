<?php 
	// Datos de Conexion
	$servidor = "localhost";
	$usuario = "root";
	$contrasena = "";
	$BD = "UNEVE";


	$conexion = new mysqli($servidor, $usuario, $contrasena, $BD);

	if ($conexion->connect_errno) {
    	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

?>