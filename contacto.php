<?php
	session_start();		

	if(empty($_SESSION ['usuario'])){
		header('location: login.php');
		
	}
	else{
		echo($_SESSION ['usuario']);
	}
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
						<span class="d-none d-md-inline"><?php echo($_SESSION ['usuario']); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Editar Perfil</a>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
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
										<?php echo($_SESSION ['usuario']); ?>
									</div>
								</div>
								<small>Administrador</small>
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
						<a href="mapa.html" class="menu-link">
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
						<a href="catalogo.html" class="menu-link">
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
						<a href="gestor_consumo.html" class="menu-link">
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
						<a href="contacto.html" class="menu-link">
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

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-align-left"></i>
							</div>
							<div class="menu-text">Cuenta</div>
							<div class="menu-caret"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item has-sub">
								<a href="login.html" class="menu-link">
									<div class="menu-text">Inicio de Sesión</div>
									<div class="menu-caret"></div>
								</a>
							</div>
						</div>
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

		</div>
		<div class="container-fluid control-form2">
			<div class="row aling-items-center justify-content-center form1">
				<div class="col-sm-8 col-md-6 col-lg-4 rounded p-4 shadow">
					<div class="row justify-content-center mb-4">
						<img src="../custom/img/coffecars2.png" class="logo2">
					</div>
					<form  class="needs-validation" method="post" action="mailto:coffeecarsinfo@gmail.com" novalidate>
							<div class="form-register">
							<div class="boxform">
								<input class="control-form form-control" type="text" name="nombres" id="nombres" placeholder="Escribe tu nombre" required >
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform">
								<input class="control-form form-control" type="text" name="apellidos" id="apellidos" placeholder="Escribe tu apellido" required>
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform">
								<input class="control-form form-control" type="email" name="correo" id="correo" placeholder="Escribe tu email" required>
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform">
								<input class="control-form form-control" type="tel" name="telefono" id="telefono" placeholder="Escribe tu número de contacto" required>
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform">
								<input class="control-form form-control" type="text" name="direccion" id="direccion" placeholder="Escribe una direccion si es el caso, del cargador que quieres añadir" required>
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform">
									<input class="control-form form-control" type="text" name="direccion" id="opcion" placeholder="Escribe un código postal si es el caso, del cargador que quieres añadir" required>
								<div class="valid-feedback"></div>
								<div class="invalid-feedback">Rellena todos los campos</div>
							</div>
							<div class="boxform control-form">
								<select class="form-select" name="pais" id="pais" required>
									<option selected disabled value="" >Selecciona...</option>
									<option>Información sobre coches eléctricos</option>
									<option>Problema con nuestra aplicacion</option>
									<option>Añadir cargadores eléctricos</option>

								</select>
								<div class="invalid-feedback">Invalido completa los datos</div>

							</div >
							<textarea name="textarea" rows="10" cols="50" name="info" id="info" class="control-form form-control" placeholder="Rellena con la información necesaria"></textarea>
								<div class="valid-feedback"></div>
								<div class="invalid-feedback">Rellena todos los campos</div>
							<div align="center" class="boxform control-form">
								<input  class="botons" type="submit" value="Register">
							</div>

							</div>
					<div id="error"></div>
				</div>
			</div>
			</div>
		</div>
		<div class="row align="center"">
			<div align="center"class="col-lg-12 col-md-6 col-sm-12">
	</body>
		<!-- ================== BEGIN BASE JS ================== -->
	<!-- ================== BEGIN core-js ================== -->
	<script src="../custom/js/script.js"></script>
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>

	<!-- ================== END core-js ================== -->

</body>
</html>