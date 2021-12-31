<?php 
//Iniciar la sesion y la conexion a la base de datos
require_once 'Includes/conexion.php';

	//Recoger los datos del formulario
if (isset($_POST)){
	$email =trim($_POST['email']);
	$password = $_POST['password'];

	//Consulta para comprobar las credenciasles del usuario
	$sql = "SELECT * FROM usuarios WHERE email ='$email'";
	$login = mysqli_query($db, $sql);

	if ($login && mysqli_num_rows($login) == 1 ) {
		$usuario = mysqli_fetch_assoc($login);

		//Comprobar la contraseña/ cifrarla
		$verify = password_verify($password, $usuario['password']);

		if ($verify){
			//Utilizar una sesion para guardar los datos del usuario logueado
			$_SESSION['usuario']= $usuario;

			if(isset($_SESSION['error_login'])) {
				unset($_SESSION['error_login']);
			}

		}else{
			//Si algo falla enviar una sesion con el fallo
			$_SESSION['error_login']= "Login incorrecto!!";
		}
		

	}else {
		//Mensaje de error

		$_SESSION['error_login']= "Login incorrecto!!";
	}


		
}

		//Redirigir al index.php
	header('Location:index.php');


 ?>