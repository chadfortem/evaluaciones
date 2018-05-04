<?php 
	// Inciar Conexion
	require 'conexion.php';


	if (!empty($_REQUEST["id"])) {
		$id = $_REQUEST["id"];

		$sql="DELETE FROM profesores WHERE idProfesor='$id';";

		if (!$conexion->query($sql)) {
			echo "
				<div class='bg-danger'>
					<h3>Error al Borrar Profesor</h3>
				</div>
			";
		}else{

		}
	}
	else{
		echo "
			<div class='bg-danger'>
				<h3>Error al Recibir Datos</h3>
			</div>
		";
	}
	
?>

