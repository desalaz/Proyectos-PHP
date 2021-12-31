<?php require_once 'Includes/cabecera.php';?>

<!-- CAJA PRINCIPAL -->
 <div class="contenedor">
 	<div id="principal">
 		<h1>Contactanos</h1>
 			<h2 class="titulo-contacto"> <<>>CoderiDesign</h2>

		<div id="register" class="bloque formulario">
			<h3>Rellena tus datos</h3>

			<!-- Mostrar errores -->
			<?php if (isset($_SESSION['completado'])):?>
				<div class="alerta alerta-exito">
					<?=$_SESSION['completado']?>
				</div>
			<?php elseif(isset($_SESSION['errores']['general'])):?>
				<div class="alerta alerta-error">
					<?=$_SESSION['errores']['general']?>
				</div>
			<?php endif; ?>

			<form action="info-recogida.php" method="POST" class="contacto"> 
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre">
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') :'' ; ?>

				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos">
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') :'' ; ?>

				<label for="email">Correo</label>
				<input type="email" name="email">
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') :'' ; ?>

				<textarea name="mensaje" placeholder="Esbribe tu mensaje"></textarea>
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mensaje') :'' ; ?>


				<input type="submit" name= "submit" value="Enviar Información">
			</form>

			<?php borrarErrores();?>
		</div>

		<button class="btn-volver-contacto"><a href="index.php">Volver</a></button>
 	
	</div> <!-- fin principal -->

</div> 
 <?php require_once 'Includes/pie.php'; ?>