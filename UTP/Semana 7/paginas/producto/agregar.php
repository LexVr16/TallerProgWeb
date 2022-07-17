<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/miestilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	
	<?php
		session_start();
		$usu = $_SESSION['usuario'];
		if(isset($_SESSION['usuario']))
			$usu = $_SESSION['usuario'];
		else
			header('location:../../index.php');
		require('../../controlador/conexion.php');
		include '../../includes/cabecera2.php';
		$conn = conectar();		
	?>

	<form action="../../llamadas/procesoCerrar.php">
		<input type="submit" name="cerrar" value="Cerrar sesión">
	</form>
	<h2>Usuario: <?=$usu?></h2><br>

	<form action="../../llamadas/procesoProducto.php" method="post" enctype="multipart/form-data">
		<label>Codigo</label>
		<input type="text" name="codigo"><br>
		<label>Nombre</label>
		<input type="text" name="nombre"><br>
		<label>Precio</label>
		<input type="text" name="precio"><br>
		<label>Foto</label>
		<input type="file" name="foto"><br>
		<label>Tipo</label>
		<select name="tipo">
			<?php
			foreach (listarTipo($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[1]?></option>			
			<?php
			}
			?>
		</select><br>
		<input type="hidden" name="valor" value="agregar">
		<input type="submit" name="agregar" value="Agregar">
	</form>

	<?php
		include '../../includes/pie.php';
	?>
</body>
</html>