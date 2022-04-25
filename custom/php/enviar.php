<?php
	$nombre = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $opcion = $_POST['opcion'];
  $info = $_POST['info'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Correo: $correo<br>Telefono: $telefono<br>Dirección: $direccion<br>Opcion: $opcion<br>Info: $info <br>Mensaje:".$_POST['mensaje'];


	if(mail('delgadito11@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>
