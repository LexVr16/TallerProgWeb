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
		session_start();
		if(isset($_SESSION['usuario']))
			$usu = $_SESSION['usuario'];
		else
			header('location:../index.php');
	?>

	<h2>Usuario: <?=$usu?></h2><br>
	<form action="../llamadas/procesoCerrar.php">
		<input type="submit" name="cerrar" value="Cerrar sesión">
	</form>
	
	<h1>Mantenimiento de tipo</h1>
	<a href="tipo/agregar.php">Agregar tipo</a><br>
	<a href="tipo/listar.php">Listar tipos</a><br><br>

	<h1>Mantenimiento de producto</h1>
	<a href="producto/agregar.php">Agregar producto</a><br>
	<a href="producto/listar.php">Listar productos</a><br><br>	<h1>Sobre los servicios que obrece</h1>

	<?php
		include '../includes/pie.php';
	?>
</body>
</html>