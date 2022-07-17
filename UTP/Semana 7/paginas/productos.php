<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/miestilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		include '../includes/cabecera1.php';
		require('../controlador/conexion.php');
		$conn = conectar();
	?>

	<h1>Mis productos</h1>

	<?php
	foreach (listarProducto($conn) as $key => $value) {
	?>

		<img src="../imagenes/<?=$value[3]?>" width="300" height="300">
		<p>Nombre: <?=$value[1]?></p>
		<p>Precio: <?=$value[2]?></p>
		<input type="text" name="cantidad"><br>
		<input type="submit" name="agregar" value="Agregar"><br>

	<?php
	}

		include '../includes/pie.php';
	?>
</body>
</html>