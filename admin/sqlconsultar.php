<?php 

	// Inciar Conexion
	require 'conexion.php';

	if (!empty($_REQUEST["id"])) {
		$id = $_REQUEST["id"];
		
		$sql = "SELECT * FROM profesores WHERE idProfesor=$id";

		if (!$resultado = $conexion->query($sql)) {
			echo "
				<div class='bg-danger'>
					<h3>Error al consultar Profesor a modificar</h3>
					<h3>ID = ".$id."</h3>
					<h3>".$sql."</h3>
				</div>
			";
		}else{

			$fila = $resultado->fetch_assoc();

			$no="";
			$gero="";
			$apu="";
			$huma="";
			$comu="";
			$gastro="";
			$aero="";


			switch ($fila["carreraProfesor"]) {
				case 0:
					$no=" selected";
					break;
				case 1:
					$gero=" selected";
					break;
				case 2:
					$apu=" selected";
					break;
				case 3:
					$huma=" selected";
					break;
				case 4:
					$comu=" selected";
					break;
				case 5:
					$gastro=" selected";
					break;
				case 6:
					$aero=" selected";
					break;
			}


			echo "
				<div class='col-12'>
					<div class='form-row'>
						<div class='col'>
							<div class='input-group'>
								<div class='input-group-prepend'>
									<span class='input-group-text'>Nombre:</span>
								</div>
								<input id='modificarNombre' type='text' class='form-control' placeholder='Nombre' value='".$fila["nombreProfesor"]."'>
								<input id='modificarPaterno' type='text' class='form-control' placeholder='Apellido Paterno' value='".$fila["paternoProfesor"]."'>
								<input id='modificarMaterno' type='text' class='form-control' placeholder='Apellido Materno' value='".$fila["maternoProfesor"]."'>
							</div>
						</div>
						<div class='col'>
							<div class='input-group'>
								<div class='input-group-prepend'>
									<span class='input-group-text'>Carrera:</span>
								</div>
								<select id='optModificar' class='form-control'>
							    	<option".$no." value='0'>No Definida</option>
							    	<option".$gero." value='1'>Gerontologia</option>
							    	<option".$apu." value='2'>Apucuntura</option>
							    	<option".$huma." value='3'>Humanidades y Empresas</option>
							    	<option".$comu." value='4'>Ingenieria en Comunicacion Multimedia</option>
							    	<option".$gastro." value='5'>Gastronomia Nutricional</option>
							    	<option".$aero." value='6'>Ingenieria Aeroportuaria</option>
								</select> 
							</div>
						</div>
					</div>
				</div>
			";
		}
	}
	else{
		echo "No llega el GET";
	}
?>