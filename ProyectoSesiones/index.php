<!Doctype html>
<html lang="es">
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
				<option>Placa MMX-100</option>
				<option>Placa MMX-200</option>
				<option>Teléfono ALSTER</option>
				<option>Teléfono MOVILON</option>
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

		$_SESSION["Total"]=0;
		
		switch ($_POST["Productos"]) {
			case "Placa MMX-100":
			$_SESSION["Total"]= $_SESSION["Total"] + 700;
			break;
			
			case "Placa MMX-200":
			$_SESSION["Total"]= $_SESSION["Total"] + 1400;
			break;
			
			case "Teléfono ALSTER":
			$_SESSION["Total"]= $_SESSION["Total"] + 850;
			break;
			
			case "Teléfono MOVILON":
			$_SESSION["Total"]= $_SESSION["Total"] + 623;
			break;
			
			} 
			echo "<p> Total a facturar: " . $_SESSION["Total"] . " € </p>";
			
			echo "<a href='" . $_SERVER['PHP_SELF'] ."'>Volver</a>";
		
		} 
	
	?>
				
</body>
	
</html>	