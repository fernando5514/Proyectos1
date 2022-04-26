<?php
	session_start();		

	if(empty($_SESSION ['usuario'])){
		header('location: login.php');
		
	}
	else{
		echo($_SESSION ['usuario']);
	}
		$str = strtoupper($_SESSION ['usuario']);

?>

<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8" />
	<title>Coffee Cars</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="../assets_corporate/css/corporate/vendor.min.css" rel="stylesheet" />
	<link href="../assets_corporate/css/corporate/app.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link href="../custom/css/styles.css" rel="stylesheet">


	<!-- ================== END core-css ================== -->

</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img class="logo" src="../custom/img/coffeecars.jfif"
						alt="logo"><b>Coffee</b>Cars</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->

			<!-- BEGIN header-nav -->
			<div class="navbar-nav">

				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<div class="image image-icon bg-gray-800 text-gray-600">
							<i class="fa fa-user"></i>
						</div>
						<span class="d-none d-md-inline"><?php echo($str); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="login.php" class="dropdown-item">Cerrar Sesión</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
							data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image menu-profile-image-icon bg-gray-900 text-gray-600">
								<i class="fa fa-user"></i>
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										<?php echo($str); ?>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="menu-item active">
						<a href="index.php" class="menu-link">
							<div class="menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-house" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
										d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
									<path fill-rule="evenodd"
										d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
								</svg>
							</div>
							<div class="menu-text">Home</div>
						</a>
					</div>
					<div class="menu-item active">
						<a href="mapa.php" class="menu-link">
							<div class="menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-pin-map" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
										d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
									<path fill-rule="evenodd"
										d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
								</svg>
							</div>
							<div class="menu-text">Mapa</div>
						</a>
					</div>
					<div class="menu-item active">
						<a href="catalogo.php" class="menu-link">
							<div class="menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-images" viewBox="0 0 16 16">
									<path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
									<path
										d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
								</svg>
							</div>
							<div class="menu-text">Catálogo</div>
						</a>
					</div>

					<div class="menu-item active">
						<a href="gestor_consumo.php" class="menu-link">
							<div class="menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-calculator" viewBox="0 0 16 16">
									<path
										d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
									<path
										d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z" />
								</svg>
							</div>
							<div class="menu-text">Gestor de Consumo</div>
						</a>
					</div>

					<div class="menu-item active">
						<a href="contacto.php" class="menu-link">
							<div class="menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-envelope-fill" viewBox="0 0 16 16">
									<path
										d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
								</svg>
							</div>
							<div class="menu-text">Contacto</div>
						</a>
					</div>


					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i
								class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
		</div>
		<!-- END #sidebar -->

		<!-- BEGIN section -->
		<div class="section">
			<!-- BEGIN container -->
			<div class="container text-center">
				<div class="display-5 fw-bolder mb-2">Catálogo</div>
				<div class="fs-20px fw-bold text-gray-600">DESCUBRE EL PLACER DE CONDUCIR UN COCHE ELECTRÍCO<span
						class="d-lg-inline d-none"><br /></span></div>
			</div>
			<!-- END container -->
		</div>
		<!-- END section -->

		<!-- BEGIN section -->
		<div class="section pt-0">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-4 -->
					<div class="col-lg-4" >
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">

								<h4>CITROËN Ë-C4 ELÉCTRICO</h4>
								<p class="fw-bold text-gray-600 mb-0 ">
									Precio:	35.000€<br>
									Autonomía: Con 136 cv de potencia, ofrece una autonomía en ciclo WLTP de 357 km.<br>
									Marca: CITROËN <br>

								</p>
								<img src="../custom/img/citroen.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>FIAT 500e CABRIO</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio: 32.000€<br>
									Autonomía: Con 118 cv de potencia, autonomía en wlpt combinado (320km).<br>
									Marca: Fiat <br>
								</p>
								<img src="../custom/img/fiat.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>BMW iX3</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:	74.000€<br>
									Autonomía: Motor eléctrico, con 286 cv de potencia,con una autonomía de hasta 461 km*<br>
									Marca: BMW <br>
								</p>
								<img src="../custom/img/bmw.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>VOLVO C40</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:44.000€<br>
									Autonomía:Motor eléctrico, con 231 cv de potencia,con una autonomía de 444 km.<br>
									Marca: VOLVO <br>
								</p>
								<img src="../custom/img/volvo.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>KIA EV6</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:	32.500€<br>
									Autonomía: Motor eléctrico, con 325 cv de potencia,con una autonomía de 370 a 475 km <br>
									Marca: KIA <br>
								</p>
								<img src="../custom/img/kia.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>CUPRA BORN</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:	30.500€<br>
									Autonomía:Motor eléctrico, con 231 cv de potencia,con una autonomía de 548 km<br>
									Marca: CUPRA <br>
								</p>
								<img src="../custom/img/cupra.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>TESLA MODEL S</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:	105.000€<br>
									Autonomía:Motor eléctrico, con 1020 cv de potencia,con una autonomía de 627 km <br>
									Marca: TESLA <br>
								</p>
								<img src="../custom/img/tesla.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
						<!-- END card -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN card -->
						<div class="card shadow border-0 mb-5">
							<div class="card-body p-4">
								<h4>AUDI E-TRON GT</h4>
								<p class="fw-bold text-gray-600 mb-0">
									Precio:	106.000€<br>
									Autonomía:Motor eléctrico, con 646 cv de potencia,con una autonomía de 360 km  <br>
									Marca: AUDI <br>
								</p>
								<img src="../custom/img/audi.png" class="img-fluid">
								<a href="#" class="stretched-link"></a>
							</div>
						</div>
					</div>
					<!-- END col-4 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END section -->


		</div>
		<!-- end page container -->

		<!-- ================== BEGIN BASE JS ================== -->
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->

</body>
</html>
