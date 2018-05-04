<?php 
	
	// Inciar Conexion
	require 'conexion.php';

	$sql = "SELECT * FROM profesores";

	if (!$resultado = $conexion->query($sql)) {
			echo "
				<div class='container'>
					<div class='row'>
						<div class='col-12'>
							<h5>Error de Conexion</h5>
						</div>
					</div>
				</div>
			";
		}else{
			$row = $resultado->num_rows;

			for ($i = 0; $i < $row ; $i++) {
			    $fila = $resultado->fetch_assoc();

				echo"<tr class='select' onclick='select(".($i+1).",".$fila['idProfesor'].")'>
			    		<th scope='row'>".$fila['idProfesor']."</th>
			    		<td>".$fila['nombreProfesor']." ".$fila['paternoProfesor']." ".$fila['maternoProfesor']."</td>
			    		<td>".$fila['carreraProfesor']."</td>
			    		<td>NULL</td>
			    		<td>NULL</td>
			    		<td>NULL</td>
			    	</tr>";
			}
		}
?>