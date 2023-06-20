<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./../styles/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="./../styles/style.css">
	<title>Caribe Resort</title>
</head>

<body>
	<div class="first">
		<!-- NAV BAR -->
		<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #112d4e;">

			<!-- LOGO -->
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img class="d-inline-block align-top" src="./../img/logo_white_large.png" alt="logo" width="250" height="30">
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
		<div class="container">
			<div class="sub-titulo">
				<h2>Detalle de reserva</h2>
			</div>
			<div class="row py-4 justify-content-evenly">
				<div class="col-7 cuerpo_reserva">
					<div class="row mb-3 text-center">
						<div class="col">
							<p class="fw-bold reserva_label">Nombre</p>
							<hr>
							<p class="fw-normal">
								<?php $nombre = $_REQUEST['nombre'];
								print("$nombre"); ?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold reserva_label">Apellido</p>
							<hr>
							<p class="fw-normal">
								<?php $apellido = $_REQUEST['apellido'];
								print("$apellido");
								?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold reserva_label">Cédula</p>
							<hr>
							<p class="fw-normal">
								<?php $cedula = $_REQUEST['cedula'];
								print("$cedula");
								?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold reserva_label">Ciudad</p>
							<hr>
							<p class="fw-normal">
								<?php $ciudad = $_REQUEST['ciudad'];
								print("$ciudad");
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3 text-center">
						<div class="col">
							<p class="fw-bold reserva_label">Tipo de habitación</p>
							<hr>
							<p class="fw-normal">
								<?php
								$tipo_Habitacion = $_REQUEST['habitacion'];
								print("$tipo_Habitacion");
								?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold reserva_label">Número de personas</p>
							<hr>
							<?php
							$num_person = $_REQUEST['num_person'];
							foreach ($num_person as $numero_persona);
							print("$numero_persona");
							?>
						</div>
						<div class="col">
							<p class="fw-bold reserva_label">Fecha de llegada</p>
							<hr>
							<?php
							$fecha = $_REQUEST['fecha'];
							print("$fecha");
							?>
						</div>
					</div>
					<div class="row mb-3 text-center">
						<div class="col-4">
							<p class="fw-bold reserva_label">Número de días</p>
							<hr>
							<?php
							$num_day = $_REQUEST['num_day'];
							foreach ($num_day as $days);
							print("$days")
							?>
						</div>
						<div class="col-4">
							<p class="fw-bold reserva_label">¿Desayuno incluido?</p>
							<hr>
							<?php
							$desayuno = $_REQUEST['desayuno'];
							print("$desayuno");
							?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
								<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
							</svg>
							<i> El valor diario del desayuno es de $8.000</i>
						</div>
					</div>
				</div>


				<div class="col-3  info_reserva">
					<div class="row py-3">
						<div class="col">
							<p class="fw-bold reserva_label">Total a pagar</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">
								Tipo de habitación
							</p>
						</div>
						<div class="col">
							<p class="fw-bold">
								<?php print("$tipo_Habitacion"); ?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Días x<?php print("$days") ?></p>
						</div>
						<div class="col">
							<p class="fw-bold">
								<?php
								$valor = 0;
								$total = 0;
								switch ($tipo_Habitacion) {
									case "Sencilla":
										$valor = 80000;
										break;
									case "Doble":
										$valor = 100000;
										break;
									case "Doble sencilla":
										$valor = 100000;
										break;
									case "Múltiple";
										$valor = 120000;
										break;
								}

								$total_day = $valor * $days;
								print("$$total_day");
								$total += $total_day;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Desayuno </p>
						</div>
						<div class="col">
							<p class="fw-bold">
								<?php
								if ($desayuno === "Si") {
									$total_desayuno =( ($numero_persona * 8000) * $days);
									print("$$total_desayuno");
									$total += $total_desayuno;
								} else {
									print("No aplica");
								}
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-bold">Total a pagar</p>
						</div>

						<div class="col">
							<p class="fw-bold"><?php print("$$total");
												?>
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center py-2">
						<div class="col-auto">
							<input onclick="alert('Bienvenido/a a Caribe Resort')" type="submit" class="btn btn-2" value="Pagar"></input>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>