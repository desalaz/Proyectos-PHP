<?php require_once 'Includes/conexion.php'; ?>
<?php require_once 'Includes/helpers.php'; ?>

<?php 
	$entrada_actual = conseguirEntrada($db, $_GET['id']);

		if (!isset($entrada_actual['id'])){
			header("Location: index.php");
		}

	 ?>

<?php require_once 'Includes/cabecera.php'; ?>

<?php require_once 'Includes/lateral.php'; ?>


<!-- CAJA PRINCIPAL -->
<div id="principal">
	<div class= "cont-entrada">
	<h1><?=$entrada_actual['titulo']?></h1>

	<a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
	<h2><?=$entrada_actual['categoria']?></h2>
	</a>

	<h5><?=$entrada_actual['fecha']?> | <?=$entrada_actual['usuario'] ?></h5>

	<p>
		<?=$entrada_actual['descripcion']?>
	</p>

	<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
		<br>
		<a href="editar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-verde">Editar entrada</a>
		<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-naranja">Eliminar entrada</a>

	<?php endif; ?>

	
	</div>
</div> <!-- fin principal -->


<?php require_once 'Includes/pie.php'; ?>
