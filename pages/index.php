<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/Tarea_PHP/styles/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="/Tarea_PHP/styles/style.css">
	<title>Caribe Resort</title>
</head>

<body>

	<div class="first">

		<!-- NAVEGATION -->
		<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #112d4e;">
			<!-- LOGO -->
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img class="d-inline-block align-top" src="/Tarea_PHP/img/logo_white_large.png" alt="logo" width="250" height="30">
				</a>
				<!-- NAVEGATION -->
				<div class="collapse navbar-collapse justify-content-end">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#" style="color: #a2a2a2;">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#" style="color: #a2a2a2;">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#" style="color: #a2a2a2;">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#" style="color: #a2a2a2;">Contacs</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- CAROUSEL -->
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="/Tarea_PHP/img/caribe.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Cartagena</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga harum necessitatibus dolorum aliquid dolores doloribus, qui aut inventore rem asperiores unde eligendi! Atque ipsa ullam ipsum beatae ratione asperiores libero?</p>
						<div class="slider-btn">
							<a href="#titulo">
								<div class="btn btn-1">
									Reservar
								</div>
							</a>
						</div>
						<div class="i">
							<i>"Un lugar inolvidable"</i>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/Tarea_PHP/img/caribe2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Barranquilla</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga harum necessitatibus dolorum aliquid dolores doloribus, qui aut inventore rem asperiores unde eligendi! Atque ipsa ullam ipsum beatae ratione asperiores libero?.</p>
						<div class="slider-btn">
							<a href="#titulo">
								<div class="btn btn-1">
									Reservar
								</div>
							</a>
						</div>
						<div class="i">
							<i>"Un lugar inolvidable"</i>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/Tarea_PHP/img/caribe3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Santa Marta</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga harum necessitatibus dolorum aliquid dolores doloribus, qui aut inventore rem asperiores unde eligendi! Atque ipsa ullam ipsum beatae ratione asperiores libero?</p>
						<div class="slider-btn">
							<a href="#titulo">
								<div class="btn btn-1">
									Reservar
								</div>
							</a>
						</div>
						<div class="i">
							<i>"Un lugar inolvidable"</i>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<div class="second">
		<div class="titulo">
			<a name="titulo">
				<h2 class="text-center">Reservas</h2>
			</a>
		</div>
		<div class="container c_form d-flex justify-content-center">
			<div class="container-form ">
				<form action="" >
					<div class="row mb-2 ">
						<div class="col-4">
							<label for="" class="form-label ">Nombre</label>
							<input type="text" name="" id="" class="form-control form-control-sm" placeholder="Nombre">
						</div>
						<div class="col-4">
							<label for="" class="form-label">
								Apellido
							</label>
							<input type="text" name="" id="" class="form-control form-control-sm" placeholder="Apellido">
						</div>
						<div class="col-4">
							<label for="" class="form-label">Cédula</label>
							<input type="text" name="" id="" class="form-control form-control-sm" placeholder="Cédula">
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">
							<label class="form-label">Ciudad</label>
						</div>

						<div class="col-3">
							<div class="form-check">
								<input type="radio" name="" id="" class="form-check-input">Cartagena
								<label for="" class="form-check-label"></label>
							</div>
						</div>

						<div class="col-3">

							<div class="form-check ">
								<input type="radio" name="" id="" class="form-check-input">Barranquilla
								<label for="" class="form-check-label"></label>
							</div>
						</div>

						<div class="col-3">

							<div class="form-check">
								<input type="radio" name="" id="" class="form-check-input">Santa Marta
								<label for="" class="form-check-label"></label>
							</div>
						</div>

					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-6">
							<table class="table table-bordered border-light table-sm">
								<thead>
									<tr>
										<th scope="col">Tipos de Habitaciones</th>
										<th scope="col">Precio por noche</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td scope="row">Sencilla</td>
										<td>$80.000</th>
									</tr>
									<tr>
										<td scope="row">Doble</td>
										<td>$100.000</td>
									</tr>
									<tr>
										<td scope="row">Doble Sencilla</td>
										<td>$100.000</td>
									</tr>
									<tr>
										<td scope="row">Múltiple</td>
										<td>$120.000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label for="" class="form-label">Tipo de Habitación</label>
							<select name="" id="" class="form-select form-select-sm">
								<option selected>Elige</option>
								<option value="">Sencilla</option>
								<option value="">Doble</option>
								<option value="">Doble Sencilla</option>
								<option value="">Múltiple</option>
							</select>
						</div>
						<div class="col-3">
							<label for="" class="form-label">Número de personas</label>
							<input type="number" name="" id="" min="1" max="4" class="form-control form-control-sm ">
						</div>
						<div class="col-3">
							<label for="" class="form-label">Fecha de llegada</label>
							<input type="date" name="" id="" class="form-control form-control-sm">
						</div>
						<div class="col-3">
							<label for="" class="form-label">Número de días</label>
							<input type="number" name="" id="" min="1" max="30" class="form-control form-control-sm">
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>























	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>









</body>

</html>