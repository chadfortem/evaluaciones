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
</head>
<header>
	<!-- Titulo -->
	<div class="container mb-3 mt-3">
		<div class="row">
			<h5>Agregar Docente</h5>
		</div>
	</div>
	<!-- Final de Titulo-->
</header>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form>
					<div class="form-row">
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Nombre:</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombre">
								<input type="text" class="form-control" placeholder="Apellido Paterno">
								<input type="text" class="form-control" placeholder="Apellido Materno">
							</div>
						</div>
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Carrera:</span>
								</div>
								<select id="carrera" class="form-control">
							    	<option selected>No Definida</option>
							    	<option>Gerontologia</option>
							    	<option>Apucuntura</option>
							    	<option>Humanidades y Empresas</option>
							    	<option>Ingenieria en Comunicacion Multimedia</option>
							    	<option>Gastronomia Nutricional</option>
							    	<option>Ingenieria Aeroportuaria</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<footer style="height: 2rem;">
	
</footer>
</html>