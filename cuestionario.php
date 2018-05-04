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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
	.dot{
		border-radius: 3rem;
	}

	.activado{
		background-color: blue;
		color: #FFF;
	}

	.n{
		background-color: red;
		color: black;
	}

	.cn{
		background-color: yellow;
		color: black;
	}

	.cs{
		background-color: orange;
		color: black;
	}

	.s{
		background-color: green;
		color: black;
	}
</style>

<header>
	<!-- Titulo -->
	<div class="container mb-1 mt-3">
		<div class="row d-flex justify-content-between">
			<div class="col-12 col-lg-4">
				<h3>Materia</h3>
				<h3>Nombre del Profesor</h3>
			</div>
		</div>
	</div>
	<hr>
	<!-- Final de Titulo-->
</header>

<body>
		<div class="container mb-2">
			<div class="row d-flex justify-content-center">
				<?php 
					for ($n=1; $n < 23; $n++) { 
						?>
							<span class="mr-1 dot text-center" style="width: 2rem;">
								<?php echo $n; ?>
							</span>
						<?php 
					}
				?>
			</div>
		</div>

		<hr>

		<div class="container">
				<?php 
					for ($i=1; $i < 23; $i++) { 
						?>
							<div class="mySlides  containermb-3">
								<div class="row">
									<div class="col-12 col-lg-4">
										<h1>Pregunta <?php echo $i; ?></h1>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod voluptatem ratione earum enim, minima sed, laboriosam suscipit natus laborum praesentium repellat delectus cum impedit labore. Est, ullam exercitationem debitis qui!</p>
									</div>
								</div>
								<div class="row">
									<div class="btn-group w-100" role="group" aria-label="Basic example">
										<button style="height: 5rem" type="button" class="btn btn-danger w-25" onclick="plusSlides(<?php echo $i; ?>,1,1)">Nunca</button>
										<button style="height: 5rem" type="button" class="btn btn-warning w-25" onclick="plusSlides(<?php echo $i; ?>,2,1)">Casi Nunca</button>
										<button style="height: 5rem" type="button" class="btn btn-warning w-25" onclick="plusSlides(<?php echo $i; ?>,3,1)">Casi Siempre</button>
										<button style="height: 5rem" type="button" class="btn btn-success w-25" onclick="plusSlides(<?php echo $i; ?>,4,1)">Siempre</button>
									</div>
								</div>
							</div>
						<?php 
					}
				?>
							<div class="mySlides  containermb-3">
								<div class="row">
									<div class="col-12 col-lg-4">
										<h1>Comentario</h1>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p>Deja un comentario a tu profesor</p>
									</div>
									<div class="form-group w-100">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="btn-group w-100" role="group" aria-label="Basic example">
										<button class="btn-block btn-lg btn-success" onclick="">Finalizar</button>
									</div>
								</div>
							</div>
		</div>
	<hr>

</body>
<footer style="height: 2rem;">
	
</footer>

<script>
	var slideIndex = 1;
	showSlides(slideIndex);
	var a = [];
	

function answers(ask,ans){
	console.log("Pregunta"+ask+" "+"Respuesta"+ans);
	a[ask]=ans;
	console.log(" A["+ask+"]="+a[ask]);
}


// Next/previous controls
function plusSlides(ask,ans,n) {
	answers(ask,ans);
	changesDots(ask,ans);
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("  activado", "");
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += "  activado";
}

function changesDots(ask,ans){
	console.log("ask="+ask);
	console.log("ans="+ans);
	var text;
	var dots = document.getElementsByClassName("dot");
	switch (ans){
		case 1:
			dots[ask-1].innerHTML = "n";
			dots[ask-1].className += " n";
			break;
		case 2:
			dots[ask-1].innerHTML = "cn";
			dots[ask-1].className += " cn";
			break;
		case 3:
			dots[ask-1].innerHTML = "cs";
			dots[ask-1].className += " cs";
			break;
		case 4:
			dots[ask-1].innerHTML = "s";
			dots[ask-1].className += " s";
			break;
	}

	text;
}

</script>
</html>