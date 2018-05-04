<?php 
	// Inciar Conexion
	require 'conexion.php';


	if (!empty($_REQUEST["nombre"])) {
		$nombre = ucwords($_REQUEST["nombre"]);
		$paterno = ucwords($_REQUEST["paterno"]);
		$materno = ucwords($_REQUEST["materno"]);
		$carrera = $_REQUEST["carrera"];
		$id = $_REQUEST["id"];

		$sql="UPDATE profesores SET nombreProfesor = '$nombre' , paternoProfesor = '$paterno' , maternoProfesor = '$materno' , carreraProfesor = '$carrera' WHERE idProfesor='$id';";

		if (!$conexion->query($sql)) {
			echo "
				<div class='bg-danger'>
					<h3>Error al Actualizar el Registro</h3>
				</div>
			";
		}else{

			switch ($carrera) {
				case 0:
					$carrera="No Definida";
					break;
				case 1:
					$carrera="Gerontologia";
					break;
				case 2:
					$carrera="Apucuntura";
					break;
				case 3:
					$carrera="Humanidades y Empresas";
					break;
				case 4:
					$carrera="Ing. Comunicacion Multimedia";
					break;
				case 5:
					$carrera="Gatronomia Nutricional";
					break;
				case 6:
					$carrera="Ing. Aeroportuaria";
					break;
				
				default:
					$carrera="NULL";
					break;
			}

			echo "
				<div class='bg-success p-1 text-center'>
					<h3>Actualizado</h3>
					<span>".$nombre." ".$paterno." ".$materno." Carrera: ".$carrera."</span>
				</div>
			";
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