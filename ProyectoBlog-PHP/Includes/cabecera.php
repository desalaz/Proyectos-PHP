<?php	include_once 'conexion.php'; ?>
<?php  require_once 'Includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog de Videojuegos</title>
	<link rel="stylesheet" href="./assets/css/estilos.css">
</head>
<body>
	<!-- CABECERA -->
	<header id="cabecera">
		<!-- LOGO -->
		<div id="logo">
			<a href="index.php">
				Blog de Videojuegos
			</a>
		</div>	
		
		<!-- MENU -->
		<nav id="menu">  		
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<?php
					 $categorias = conseguirCategorias($db);

					 if(!empty($categorias)):
					 	while ($categoria = mysqli_fetch_assoc($categorias)): 
				?>
					<li>
						<a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre'] ?></a>
					</li>
					
				<?php 
						
						endwhile;
					endif; 
				?>

				<li>
					<a href="sobre-mi.php">Sobre mi </a>
				</li>
				<li>
					<a href="contacto.php">Contacto</a>

				</li>
			</ul>	

		</nav>
		<div class="clearfix"></div>
	</header>

	<div id="contenedor">