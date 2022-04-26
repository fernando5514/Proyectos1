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
										<?php echo($str);?>
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
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto"
							data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
				class="stretched-link"></a></div>
		<!-- END #sidebar -->

		<div class="section section-hero">
			<!-- BEGIN section-bg -->
			<div class="section-bg with-cover" style="background-image: url(../custom/img/fondo-index.jpg);"></div>
			<div class="section-bg bg-gray-800 bg-opacity-50"></div>
			<!-- END section-bg -->

			<!-- BEGIN container -->
			<div class="container position-relative">
				<!-- BEGIN section-hero-content -->
				<div class="section-hero-content">
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-8 -->
						<div class="col-lg-8 col-lg-10">
							<!-- BEGIN hero-title-desc -->
							<h1 class="hero-title mb-3 mt-5 pt-md-5">
								BIENVENIDO A COFFEE CARS
							</h1>
							<div class="fs-18px text-white text-opacity-80">
								Únete a la comunidad de coches eléctricos y comienza a ahorrar y proteger el medio
								ambiente
							</div>
							<!-- END hero-title-desc -->

							<!-- BEGIN row -->
							<div class="row text-white mt-4 mb-5 pb-5">
								<!-- BEGIN col-4 -->
								<div class="col-lg-4 mb-3 mb-lg-0">
									<div class="d-flex align-items-center">
										<div class="h1 text-white text-opacity-30 me-3"><i class="bi bi-download"></i>
										</div>
										<div>
											<div class="fw-bold mb-1 h3">21k+</div>
											<div class="fw-bold text-white text-opacity-80">Usuarios</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
							</div>
							<!-- END row -->

							<a href="mapa.php" class="hero-btn fw-bold mb-n5"><i class="fa fa-arrow-right"></i>
								Comenzar</a>
						</div>
						<!-- END col-8 -->
					</div>
					<!-- END row -->
				</div>
				<!-- END section-hero-content -->
			</div>
			<!-- END container -->
		</div>
		<!-- END section -->

		<!-- BEGIN section -->
		<div class="section">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<div class="pt-lg-5 pb-lg-3 text-center">
					<div class="display-6 fw-bolder mb-3 d-flex align-items-center justify-content-center">
						Nuestra Misión
					</div>
					<p class="fs-18px mb-5">Ponemos nuestro granito de arena para dar el gran paso de cambiarse a la
						movilidad eléctrica <span class="d-none d-lg-inline"><br /></span>y ayudar a reducir el consumo
						de combustible de nuestros usuarios.</p>
					Coffee Developers.</p>

				</div>
				<!-- END section-title -->

				<!-- BEGIN section-subtitle -->
				<h4 class="section-subtitle">Objetivos</h4>
				<!-- BEGIN section-subtitle -->
				<!-- BEGIN row -->
				<div class="row gx-lg-5">
					<!-- BEGIN col-4 -->
					<div class="col-lg-4">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img" style="background-image: url(../custom/img/index1.jpg);">
								</div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="">Compromiso</span></div>
								<h2 class="news-title">Ayudar a reducir la huella de carbono que generan los carburantes
								</h2>
								<p class="news-date">-Coffee Developers</p>
							</div>
						</div>
						<!-- END news -->
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img" style="background-image: url(../custom/img/index2.jpg);">
								</div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-indigo-200 text-indigo-800">Nuestro
										Trabajo</span></div>
								<h2 class="news-title">Acercar la información a nuestros clientes de manera sencilla
								</h2>
								<p class="news-date">-Coffee Developers</p>
							</div>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-8 -->
					<div class="col-lg-8">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img news-media-img-lg"
									style="background-image: url(../custom/img/index3.jpg);"></div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-primary-200 text-theme-800">Cambio</span></div>
								<h2 class="news-title">Facilitar el cambio de motores de combustión a la nueva movilidad
									eléctrica</h2>
								</h2>
								<p class="news-date">-Coffee Developers</p>
							</div>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-8 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END section -->

		<!-- BEGIN section -->
		<div class="section bg-light">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row align-items-center">
					<!-- BEGIN col-6 -->
					<div class="col-lg-6 pe-lg-4 mb-5 mb-lg-0">
						<div class="section-subtitle">Sobre nosotros</div>
						<div class="section-title">¿Cómo empezamos?</div>
						<div class="section-desc">
							Our suite of developer-friendly products and services help you build, secure, and deliver
							enterprise-grade apps in less time — for any platform.
						</div>
					</div>
					<!-- END col-6 -->
				</div>
				<!-- END row -->
				<!-- BEGIN section -->
				<section class="page-section bg-light" id="team">
					<div class="container">
						<div class="text-center">
							<h2 class="section-heading text-uppercase">NUESTRO EQUIPO</h2>
							<h3 class="section-subheading text-muted">Compañerismo, Compromiso y Eficiencia</h3>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<div class="team-member">
									<img class="mx-auto rounded-circle" src="" alt="..." />
									<h4>Fernando Ramírez</h4>
									<p class="text-muted">Jefe Proyecto</p>
									<a class="btn btn-dark btn-social mx-2" href="#!"
										aria-label="Parveen Anand LinkedIn Profile"><i
											class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="team-member">
									<img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
									<h4>Álvaro Ramos</h4>
									<p class="text-muted">Documentador Jefe</p>
									<a class="btn btn-dark btn-social mx-2" href="#!"
										aria-label="Diana Petersen LinkedIn Profile"><i
											class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="team-member">
									<img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
									<h4>Álvaro Delgado</h4>
									<p class="text-muted">Diseñador Jefe</p>
									<a class="btn btn-dark btn-social mx-2" href="#!"
										aria-label="Larry Parker LinkedIn Profile"><i
											class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="team-member">
									<img class="mx-auto rounded-circle" src="../custom/img/chinchilla_equipo.jpeg" alt="..." />
									<h4>Juan Chinchilla</h4>
									<p class="text-muted">Diseñador Web</p>
									<a class="btn btn-dark btn-social mx-2" href="#!"
										aria-label="Larry Parker LinkedIn Profile"><i
											class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!--END section-->

			</div>
			<!-- END container -->
		</div>
		<!-- END section -->

		<!-- BEGIN section -->
		<div class="section">
			<!-- BEGIN container -->
			<div class="container">
				<div class="section-subtitle">Noticias Recientes</div>

				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img news-media-img-lg"
									style="background-image: url(../custom/img/noticia1.jpg);"></div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-aqua-200 text-aqua-800">motor.es</span></div>
								<div class="news-title">Las ventas de coches eléctricos en España crecen un 53% en marzo
									de 2022.</div>
								<div class="news-date">01 Abril 2022</div>
							</div>
							<a href="https://www.motor.es/noticias/ventas-coches-electricos-2022-marzo-202286049.html"
								class="stretched-link"></a>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img news-media-img-lg"
									style="background-image: url(../custom/img/noticia2.jpg);"></div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-pink-200 text-pink-800">Motor 16</span></div>
								<div class="news-title">Estos son los coches eléctricos más vendidos del año, con el
									Tesla Model 3 a la cabeza</div>
								<div class="news-date">05 Abril 2022</div>
							</div>
							<a href="https://www.motor16.com/noticias/coches-electricos-mas-vendidos-ano-tesla-model-3/"
								class="stretched-link"></a>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img news-media-img-lg"
									style="background-image: url(../custom/img/noticia3.jpg);"></div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-primary-200 text-theme-800">G.Aseguranza</span>
								</div>
								<div class="news-title">Los vehículos eléctricos e híbridos suponen menos del 3% del
									parque automovilístico</div>
								<div class="news-date">04 Abril 2022</div>
							</div>
							<a href="https://www.grupoaseguranza.com/noticias-de-seguros/vehiculos-electricos-hibridos-suponen-menos-3-parque" class="stretched-link"></a>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<!-- BEGIN news -->
						<div class="news">
							<div class="news-media">
								<div class="news-media-img news-media-img-lg"
									style="background-image: url(../custom/img/noticia4.png);"></div>
							</div>
							<div class="news-content">
								<div class="news-label"><span class="bg-indigo-200 text-indigo-800">gob.es</span>
								</div>
								<div class="news-title">El Gobierno aprueba la regulación de los servicios de recarga para vehículos eléctricos</div>
								<div class="news-date">08 Marzo 2022</div>
							</div>
							<a href="https://www.miteco.gob.es/es/prensa/ultimas-noticias/el-gobierno-aprueba-la-regulación-de-los-servicios-de-recarga-para-vehículos-eléctricos/tcm:30-537828" class="stretched-link"></a>
						</div>
						<!-- END news -->
					</div>
					<!-- END col-3 -->
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
