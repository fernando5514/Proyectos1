<?php
	include('db.php');
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['claveuser'];
	session_start();
	$_SESSION['usuario']=$usuario;

	$conexion=mysqli_connect("79.146.192.82","admin","admin","coffee_cars");

	$consulta="SELECT*FROM usuarios where usuario='$usuario' and claveuser='$contraseña'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
		header("location: index.php");
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>Login</title>
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
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-with-news-feed">
			<!-- BEGIN news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(../custom/img/fondo-login.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Coffee</b> Cars</h4>
					<p>
            Únete a la comunidad de coches eléctricos y comienza a ahorrar y proteger el medio ambiente
					</p>
				</div>
			</div>
			<!-- END news-feed -->

			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header mb-30px">
					<div class="brand">
						<div class="d-flex p-3 align-items-center">
              <a href="index.php" class="navbar-brand"><img class="logo-login" src="../custom/img/coffecars2.png"
      						alt="logo"></a>
				</div>
				<!-- END login-header -->

				<!-- BEGIN login-content -->
                <?php if(!empty($message)): ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>
				<div class="login-content">
					<form action="login.php" method="POST" class="fs-13px">
						<div class="form-floating mb-15px">
							<input type="text" name="usuario" class="form-control h-45px fs-13px" placeholder="Email Address" id="emailAddress" />
							<label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email</label>
						</div>
						<div class="form-floating mb-15px">
							<input type="password" name="claveuser" class="form-control h-45px fs-13px" placeholder="Password" id="password" />
							<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Contraseña</label>
						</div>
						<div class="mb-15px">
							<button type="submit" class="btn btn-dark d-block h-45px w-100 btn-lg fs-14px">Entrar</button>
						</div>
						<div class="mb-40px pb-40px text-dark">
            </div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center  mb-0">
							&copy; Coffee Developers Derechos Reservados 2022
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="../custom/js/app.js"></script>
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>