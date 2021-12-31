 	
 	<?php require_once 'Includes/redireccion.php';?>

	<?php require_once 'Includes/cabecera.php';?>

 	<?php require_once 'Includes/lateral.php';?> 

 	<!-- CAJA PRINCIPAL -->
 	<div id="principal">
 		<h1>Crear categorias</h1>

 		<p>
 			Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas.
 		</p>
 		<br>

		<form action="guardar-categoria.php" method="POST">
			<label for="nombre">Nombre de la Categoría:</label>
			<input type="text" name="nombre">
			<input type="submit" value="Guardar">

		</form>

 	</div> <!-- fin principal -->

	<?php require_once 'Includes/pie.php'; ?>

 




