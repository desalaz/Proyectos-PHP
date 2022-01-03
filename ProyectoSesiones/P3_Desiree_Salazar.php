<!Doctype html>
<html lang ="es">
	<head >
		<title>Sesiones</title>
		<meta charset= "UTF-8">
		</head>
	<body>
		
		<?php
		session_start();
		if (!$_POST){
		?>
		<p>Elija el producto y pulse en Enviar:</p>
		
		<form method= "post" action= "<?php echo $_SERVER['PHP_SELF']; ?>">
			<select size= "1" name= "Productos">
				<option>Monitor</option>
				<option>CPU</option>
				<option>Ratón</option>
				<option>Teclado</option>
				<option>Webcam</option>
				<option>Altavoces</option>
			</select>
			<input type="submit" name= "botEnviar" value= "Enviar"><br><br>
			
			<a href = "<?php echo $_SERVER['PHP_SELF'] ; ?>?logout=1">Desconectar</a>
		</form>
	
	<?php
		 if (isset($_GET ["logout"])){
		      session_destroy ();
			  
		echo "<p>Sesión finalizada</p>";
		}
		 
		
		} 	else { if (isset ($_SESSION["Total"])== null)

		$_SESSION["Total"]= 0;
		
		switch ($_POST["Productos"]) {
			case "Monitor":
			$_SESSION["Total"]= $_SESSION["Total"] + 150;
			break;
			
			case "CPU":
			$_SESSION["Total"]= $_SESSION["Total"] + 450;
			break;
			
			case "Ratón":
			$_SESSION["Total"]= $_SESSION["Total"] + 10;
			break;
			
			case "Teclado":
			$_SESSION["Total"]= $_SESSION["Total"] + 15;
			break;
			
			case "Webcam":
			$_SESSION["Total"]= $_SESSION["Total"] + 25;
			break;
			
			case "Altavoces":
			$_SESSION["Total"]= $_SESSION["Total"] + 13;
			break;
			
			} 
			echo "<p> Total a facturar: " . $_SESSION["Total"] . " €</p>";
			
			echo "<a href='" . $_SERVER['PHP_SELF'] ."'>Volver</a>";
		
		} 
	
	?>
				
</body>
	
</html>	