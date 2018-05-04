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
			<h5>Docentes</h5>
		</div>
	</div>
	<!-- Final de Titulo-->
</header>
<body onclick="">
	<div class="container">
		<div class="row d-flex justify-content-end">
			<div class="col-lg-4">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Busqueda por nombre" aria-label="Busqueda" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">Lupa</span>
					</div>
					<div class="input-group-append">
						<button class="btn">V</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<table class="table" style="height: 50%;">
				<thead>
			    	<tr>
			    		<th scope="col">ID</th>
			    		<th scope="col">Nombre</th>
			    		<th scope="col">Carrera</th>
			    		<th scope="col">Materias</th>
			    		<th scope="col">Grupos</th>
			    		<th scope="col">Calificacion</th>
			    	</tr>
				</thead>
				<tbody id="table">
					<!-- Aqui se agrega la tabla desde AJAX -->
				</tbody>
			</table>
		</div>
	</div>
	<div class="container">
		<div class="row d-flex justify-content-lg-between">
			<div class="btn-group col-12 col-lg-4" role="group">
				<button class="btn btn-success" onclick="agregar()">Agregar</button>
				<button class="btn btn-info" onclick="modificar()" id="btn-Modficar" disabled="true">Modificar</button>
				<button class="btn btn-danger" onclick="eliminarAjax()" id="btn-Eliminar" disabled="false">Eliminar</button>
			</div>
			<div class="btn-group col-12 col-lg-3" role="group">
				<a href="agregarhojadecalculo.php" class="btn btn-warning">Agregar por Hoja de Calculo</a>
			</div>
		</div>
	</div>


	<div class="container mt-5 d-none" id="Agregar">
		<div class="row">
			<div class="col-4">
				<h3>Agregar Docente</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form>
					<div class="form-row">
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Nombre:</span>
								</div>
								<input type="text" class="form-control" id="nombreAgregar" onkeypress="verifyAgregar()" placeholder="Nombre">
								<input type="text" class="form-control" id="paternoAgregar" onkeypress="verifyAgregar()" placeholder="Apellido Paterno">
								<input type="text" class="form-control" id="maternoAgregar" onkeypress="verifyAgregar()" placeholder="Apellido Materno">
							</div>
						</div>
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Carrera:</span>
								</div>
								<select id="optCarrera" class="form-control">
							    	<option value="0" selected>No Definida</option>
							    	<option value="1">Gerontologia</option>
							    	<option value="2">Apucuntura</option>
							    	<option value="3">Humanidades y Empresas</option>
							    	<option value="4">Ingenieria en Comunicacion Multimedia</option>
							    	<option value="5">Gastronomia Nutricional</option>
							    	<option value="6">Ingenieria Aeroportuaria</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row d-flex justify-content-end">
			<div class="btn-group mt-3">
				<button class="btn btn-success" id="btnAgregarSucces" onclick="actionAgregar()">Agregar</button>
				<button class="btn btn-danger" id="btnCancelarAgregar" onclick="ocultar()">Cancelar</button>
			</div>
		</div>
	</div>

	<div class="container mt-5 d-none" id="Modificar">
		<div class="row">
			<div class="col-4">
				<h3>Modificar Docente</h3>
			</div>
		</div>
		<div class="row" id="consultar">
			<!-- Aqui se inserta la consulta de Actualizacion -->
		</div>
		<div class="row d-flex justify-content-end mt-3">
			<div class="btn-group">
				<button class="btn btn-info" onclick="modificarAjax()">Modificar</button>
				<button class="btn btn-danger" onclick="ocultar()">Cancelar</button>
			</div>
		</div>
	</div>

	<div class="container mt-4" id="Panel">
		<div class="row">
			<div class="col-12">
				<div id="respuesta">
					
				</div>
			</div>
		</div>
	</div>

</body>

<script>

	var active = 0;
	var ID = 0;
	verifyAgregar();
	actionTabla();

	if (window.XMLHttpRequest) {
		// code for modern browsers
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for old IE browsers
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}



	function agregar(){
		ocultar();
		diselect()
		var agregar = document.getElementById("Agregar");
		agregar.className = agregar.className.replace("d-none", " d-block");
	}

	function modificar(){
		ocultar();
		diselect()
		var modificar = document.getElementById("Modificar");
		modificar.className = modificar.className.replace(" d-none", " d-block");
		console.log("Modificar: "+active);
	}

	function eliminar(){
		console.log("Eliminar: "+active);
		diselect();
	}

	function ocultar(){
		diselect();
		var agregar = document.getElementById("Agregar");
		var modificar = document.getElementById("Modificar");
		agregar.className = agregar.className.replace("d-block", "d-none");
		modificar.className = modificar.className.replace("d-block", "d-none");
	}

	function diselect(){
		var select = document.getElementsByClassName("select");
		for (i = 0; i < select.length; i++) {
			select[i].style.background = "#FFF";
			select[i].style.color = "#000";
		}
		document.getElementById("btn-Modficar").disabled=true;
		document.getElementById("btn-Eliminar").disabled=true;
	}

	function select(n,idMod){

		active = n-1;
		ID = idMod;
		consuntarAjax();
		var select = document.getElementsByClassName("select");
		for (i = 0; i < select.length; i++) {
			select[i].style.background = "#FFF";
			select[i].style.color = "#000";
		}
		select[n-1].style.background = "#009";
		select[n-1].style.color = "#FFF";

		document.getElementById("btn-Modficar").disabled=false;
		document.getElementById("btn-Eliminar").disabled=false;
	}

	function verifyAgregar(){
		var nombre = document.getElementById("nombreAgregar").value;
		var paterno = document.getElementById("paternoAgregar").value;
		var materno = document.getElementById("maternoAgregar").value;
		var carrera = document.getElementById("optCarrera").value;
		if (nombre===""||paterno===""||materno==="") {
			document.getElementById("btnAgregarSucces").disabled=true;
		}
		else{
			document.getElementById("btnAgregarSucces").disabled=false;
		}
	}

	function actionAgregar(){
		var nombre = document.getElementById("nombreAgregar").value;
		var paterno = document.getElementById("paternoAgregar").value;
		var materno = document.getElementById("maternoAgregar").value;
		var carrera = document.getElementById("optCarrera").value;
		console.log(nombre+" "+paterno+" "+materno+" "+carrera);

		agregarAjax(nombre, paterno, materno, carrera);

		document.getElementById("nombreAgregar").value = "";
		document.getElementById("paternoAgregar").value = "";
		document.getElementById("maternoAgregar").value = "";
		document.getElementById("optCarrera").value = "0";

		ocultar();
		actionTabla();
	}

	function disabled(){
		{document.getElementById("respuesta").innerHTML = "";}
	}

	function actionTabla() {

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("table").innerHTML = this.responseText;			
			}
	  	};
		xhttp.open("GET", "tablasql.php", true);
		xhttp.send();
	}

	function agregarAjax(nom, pat, mat, car) {

		var nombre = nom;
		var paterno = pat;
		var materno = mat;
		var carrera = car;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("respuesta").innerHTML = this.responseText;

				actionTabla();
				var reset = setTimeout(disabled, 3000)				
			}
	  	};
		xhttp.open("GET", "sqlagregar.php?nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&carrera="+carrera , true);
		xhttp.send();
	}

	function consuntarAjax(){
		var idMod = ID;

		var xhttpConsultar = new XMLHttpRequest();
		xhttpConsultar.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("consultar").innerHTML = this.responseText;			
			}
	  	};
		xhttpConsultar.open("GET", "sqlconsultar.php?id="+idMod , true);
		xhttpConsultar.send();
	}



	function modificarAjax() {

		var nombre = document.getElementById("modificarNombre").value;
		var paterno = document.getElementById("modificarPaterno").value;
		var materno = document.getElementById("modificarMaterno").value;
		var carrera = document.getElementById("optModificar").value;
		console.log("Carrera Consultada: "+carrera);
		var idMod = ID;

		var xhttpModificar = new XMLHttpRequest();
		xhttpModificar.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("respuesta").innerHTML = this.responseText;

				actionTabla();
				ocultar();
				var reset = setTimeout(disabled, 3000)				
			}
	  	};
		xhttpModificar.open("GET", "sqlmodificar.php?nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&carrera="+carrera+"&id="+idMod , true);
		xhttpModificar.send();
	}

	function eliminarAjax(){
		var idMod = ID;

		var nombre = document.getElementById("modificarNombre").value;
		var paterno = document.getElementById("modificarPaterno").value;
		var materno = document.getElementById("modificarMaterno").value;


		var r = confirm("Desea Eliminar el Profesor: "+nombre+" "+paterno+" "+materno);
		if (r == false) {
			return;
		}
		// Alerta o Desicion aqui...
		var xhttpEliminar = new XMLHttpRequest();
		xhttpEliminar.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("respuesta").innerHTML = this.responseText;

				actionTabla();
				var reset = setTimeout(disabled, 3000)		
			}
	  	};
		xhttpEliminar.open("GET", "eliminarsql.php?id="+idMod , true);
		xhttpEliminar.send();
	}
</script>

<footer>
	
</footer>
</html>
