<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Condiciones de Responsive -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Script's de Bootstrap -->
	<script src='js/bootstrap.js'>
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header>
	<!-- Titulo -->
	<div class="container mb-4">
		<div class="row justify-content-center">
			<img src="img/uneve.png" class="img-fluid">
		</div>
		<div class="row justify-content-center">
			<h3>Sistema de Evaluacion de Profesores</h3>
		</div>
	</div>
	<!-- Final de Titulo-->
</header>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Inicia Sesion</h3>
					</div>
					<form action="inicio.php" method="post">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="usuario" class="form-text" required>
						</div>
						<div class="form-group">
							<label>Matricula</label>
							<input type="password" name="contrasena" class="form-text" required>
						</div>
							<input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
					</form>
				</div>
			</div>

		</div>
	</div>	
</body>
<footer>
	
</footer>
</html>