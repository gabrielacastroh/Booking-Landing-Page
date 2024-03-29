<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./styles/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="./styles/style.css">
	<title>Caribe Resort</title>
</head>

<body>
	<!-- Contenedor Parte 1 -->
	<div class="first">
		<!-- NAV BAR -->
		<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #112d4e;">
			<!-- LOGO -->
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img class="d-inline-block align-top" src="./img/logo_white_large.png" alt="logo" width="250" height="30">
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
					<img src="./img/caribe.jpg" class="d-block w-100" alt="Cartagena-carousel">
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
					<img src="./img/caribe2.jpg" class="d-block w-100" alt="Barranquilla-carousel">
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
					<img src="./img/caribe3.jpg" class="d-block w-100" alt="SantaMarta-carousel">
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
	<!-- Contenedor Parte 2 -->
	<div class="second">
		<a name="titulo">
			<!-- Titulo Reservas -->
			<div class="titulo">
				<h2 class="text-center">Reservas</h2>
			</div>
			<!-- Formulario -->
			<div class="container c_form d-flex justify-content-center">
				<div class="container-form">
					<form name="formulario" action="./pages/procesar.php" method="POST" class="needs-validation" novalidate>
						<!-- Fila #1 -->
						<div class="row mb-3">
							<div class="col-4">
								<label class="form-label" for="validation_nombre">Nombre</label>
								<input id="validation_nombre" name="nombre" type="text" class="form-control form-control-sm" placeholder="Nombre" required>
							</div>

							<div class="col-4">
								<label class="form-label" for="validation_apellido">Apellido</label>
								<input id="validation_apellido" type="text" class="form-control form-control-sm" placeholder="Apellido" name="apellido" required>
							</div>
							<div class="col-4">
								<label class="form-label" for="validation_cedula">Cédula</label>
								<input id="validation_cedula" type="text" class="form-control form-control-sm" placeholder="Cédula" name="cedula" required>
							</div>
						</div>
						<!-- Fila #2 -->
						<div class="row mb-3">
							<div class="col-2">
								<label class="form-label">Ciudad</label>
							</div>
							<div class="col-2">
								<div class="form-check">
									<input id="validation_cartagena" type="radio" name="ciudad" value="Cartagena" class="form-check-input" required>Cartagena
									<label class="form-check-label" for="validation_cartagena"></label>

								</div>
							</div>
							<div class="col-2">
								<div class="form-check ">
									<input id="validation_quilla" type="radio" name="ciudad" value="Barranquilla" class="form-check-input" required>Barranquilla
									<label for="validation_quilla" class="form-check-label"></label>
								</div>
							</div>
							<div class="col-2">
								<div class="form-check">
									<input type="radio" name="ciudad" value="Santa Marta" class="form-check-input" required>Santa Marta
									<label class="form-check-label"></label>
								</div>
							</div>
						</div>
						<!-- Fila #3 -->
						<div class="row mb-3 d-flex justify-content-center">
							<div class="col-8">
								<table class="table table-bordered border-light table-sm">
									<thead>
										<tr>
											<th scope="col">Tipos de Habitaciones</th>
											<th scope="col">Disposición</th>
											<th scope="col">Precio por noche</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td scope="row">Sencilla</td>
											<td>1 cama</td>
											<td>$80.000</td>
										</tr>
										<tr>
											<td scope="row">Doble</td>
											<td>1 cama doble</td>
											<td>$100.000</td>
										</tr>
										<tr>
											<td scope="row">Doble Sencilla</td>
											<td>2 camas sencillas</td>
											<td>$100.000</td>
										</tr>
										<tr>
											<td scope="row">Múltiple</td>
											<td>3 o 4 camas sencillas</td>
											<td>$120.000</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- Fila #4 -->
						<div class="row mb-3">
							<div class="col-3">
								<label for="validation_habi" class="form-label">Tipo de Habitación</label>
								<select id="validation_habi" name="habitacion" class="form-select form-select-sm" required>
									<option selected disabled value="">Elige</option>
									<option value="Sencilla">Sencilla</option>
									<option value="Doble">Doble</option>
									<option value="Doble sencilla">Doble Sencilla</option>
									<option value="Múltiple">Múltiple</option>
								</select>
							</div>
							<div class="col-3">
								<label for="validation_nump" class="form-label">Número de personas</label>
								<input id="validation_nump" type="number" min="1" max="4" class="form-control form-control-sm" value="person" name="num_person[]" required>
							</div>
							<div class="col-3">
								<label for="validation_fecha" class="form-label">Fecha de llegada</label>
								<input id="validation_fecha" type="date" class="form-control  form-control-sm" name="fecha" required>
							</div>
							<div class="col-3">
								<label for="validation_numd" class="form-label">Número de días</label>
								<input id="validation_numd" type="number" min="1" max="30" class="form-control form-control-sm" name="num_day[]" required>
							</div>
						</div>
						<!-- Fila #5 -->
						<div class="row mb-3">
							<div class="col-4">
								<label class="form-label">¿Desea incluir el desayuno?</label>
							</div>
							<div class="col-1">
								<div class="form-check">
									<input id="validation_dsi" type="radio" name="desayuno" value="Si" class="form-check-input" required>Si
									<label for="validation_dsi" class="form-check-label"></label>
								</div>
							</div>
							<div class="col-2">
								<div class="form-check">
									<input id="validation_dno" type="radio" name="desayuno" value="No" class="form-check-input" required>No
									<label for="validation_dno" class="form-check-label"></label>
								</div>
							</div>
						</div>
						<!-- Fila #6 -->
						<div class="row mb-3">
							<div class="col">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
									<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
								</svg>
								<i> El valor diario del desayuno es de $8.000</i>
							</div>
						</div>
						<!-- Fila #7 -->
						<div class="row d-flex justify-content-center">
							<div class="col-auto">
							 <input type="submit" class="btn btn-1" value="Enviar" ></input>
							</div>
						</div>
					</form>
				</div>
			</div>
		</a>
	</div>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>
	<!-- Validar campos JS -->
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}
						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
</body>

</html>