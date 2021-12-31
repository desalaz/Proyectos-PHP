<?php

	if (isset($_POST)) {

	//Conexion a la base de datos
	require_once 'Includes/conexion.php';

	//Iniciar sesion

	if (!isset($_SESSION)) {
		session_start();
	}
	
	// RECOGER LOS VALORES DEL FORMULARIO
	//operador ternario.

	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;


	// Array de errores
	$errores = array ();
	
	//VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS

	//Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match ("/[0-9]/", $nombre)){
			$nombre_validado = true;
	} else {
			$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}

	//Validar campo apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match ("/[0-9]/", $apellidos)){
			$apellidos_validado = true;
	} else {
			$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válidos";
	}

	//Validar campo email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_validado = true;
	} else {
			$email_validado = false;
		$errores['email'] = "El email no es válido";
	}

	//Validar campo password
	if(!empty($password)) {
			$password_validado = true;
	} else {
			$password_validado = false;
		$errores['password'] = "La contraseña está vacia";
	}

	$guardar_usuario = false;
	
	if (count($errores) == 0) {
		$guardar_usuario = true;

		// Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

		// var_dump($password);
		// var_dump($password_segura);
		// var_dump(password_verify(, $password_segura));
		// die();

	//Insertar usuario en la tablas de usuarios de la base de datos

		$sql= "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
		$guardar= mysqli_query($db, $sql);

		// var_dump(mysqli_error($db));
		// die();

		if ($guardar) {
			$_SESSION['completado']="El registro se ha completado con exito";
		}else{

			$_SESSION['errores']['general'] ="Fallo al guardar el usuario!!";
		}

	}else {

		$_SESSION['errores'] = $errores;
		
	}

}

	header('Location: index.php');



 ?>