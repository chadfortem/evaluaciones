<?php 
	require_once('excel/Classes/PHPExcel.php');
	require_once('excel/Classes/PHPExcel/Reader/Excel2007.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Condiciones de Responsive -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- Script's de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		var a = [];
	</script>
</head>
<header>
	<!-- Titulo -->
	<div class="container mb-3 mt-3">
		<div class="row">
			<h2>Agregar por Hoja de Calculo</h2>
		</div>
	</div>
	<!-- Final de Titulo-->
</header>
<body>
<?php 
	if (empty($_FILES["archivo"])) {
?>
	<div class="container d-flex justify-content-center">
		<div class="col-4">
			<form method="post" action="agregarhojadecalculo.php" enctype="multipart/form-data">
				<div class="form-group ">
					<label for="exampleFormControlFile1">Selecciona tu Archivo</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo" required>
				</div>
				<div class="input-group">
					<input type="submit" value="Cargar" class="btn btn-success btn-block btn-lg">
				</div>
			</form>
		</div>
	</div>
<?php 
	}
	if (!empty($_FILES["archivo"])) {

		$objReader = new PHPExcel_Reader_Excel2007();
		$objPHPExcel = $objReader->load($_FILES['archivo']['name']);

		$objPHPExcel->setActiveSheetIndex(0);

		$row = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

		$sql = array($row-1);
		$link = "?";
?>
	
	<div class="container">
		<div class="row">
			<table class="table">
				<thead>
			    	<tr>
			    		<th scope="col">ID</th>
			    		<th scope="col">Nombre</th>
			    		<th scope="col">Apellido Paterno</th>
			    		<th scope="col">Apellido Materno</th>
			    		<th scope="col">Carrera</th>
			    	</tr>
				</thead>
				<tbody>
					<?php 
						for ($i=2; $i <= $row; $i++) { 
							$nombre = $objPHPExcel->setActiveSheetIndex(0)->getCell('A'.$i);
							$paterno = $objPHPExcel->setActiveSheetIndex(0)->getCell('B'.$i);
							$materno = $objPHPExcel->setActiveSheetIndex(0)->getCell('C'.$i);
							$carrera = $objPHPExcel->setActiveSheetIndex(0)->getCell('D'.$i);
							$sql[$i-1]= "INSERT INTO (nombre, paterno, materno, carrera) VALUES ('$nombre', '$paterno', '$materno', '$carrera')";
					 ?>
					 <script>
					 	a["<?php echo $i-1; ?>"]= "<?php echo $sql[$i-1]; ?>"
					 </script>
			    	<tr>
			    		<th scope="row"><?php echo $i-1; ?></th>
			    		<td><?php echo $nombre; ?></td>
			    		<td><?php echo $paterno; ?></td>
			    		<td><?php echo $materno; ?></td>
			    		<td><?php echo $carrera; ?></td>
			    	</tr>
			    	<?php 
			    		}
			    	?>
				</tbody>
			</table>
		</div>
		<script>
			var jsonSend = JSON.stringify(a);
			console.log(jsonSend);
		</script>
		<div class="row d-flex justify-content-end">
			<div class="col-3">
				<div class="btn-group">
					<a href="" class="btn btn-success">Agregar</a>
					<a href="" class="btn btn-danger">Borrar</a>
				</div>
			</div>
		</div>
	</div>
<?php 
	}
?>
</body>
<footer style="height: 2rem;">
	
</footer>
</html>