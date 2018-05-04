<?php 
	// Inciar Conexion
	require 'conexion.php';


	if (!empty($_REQUEST["nombre"])) {
		$nombre = ucwords($_REQUEST["nombre"]);
		$paterno = ucwords($_REQUEST["paterno"]);
		$materno = ucwords($_REQUEST["materno"]);
		$carrera = ucwords($_REQUEST["carrera"]);

		$sql="INSERT INTO profesores (nombreProfesor, paternoProfesor, maternoProfesor, carreraProfesor) VALUES ('$nombre', '$paterno', '$materno', '$carrera');";

		if (!$conexion->query($sql)) {
			echo "
				<div class='bg-danger'>
					<h3>Error al Agregar en la Tabla</h3>
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
					<h3>Profesor Agregado</h3>
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

