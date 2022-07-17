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
		$cod = $_REQUEST['codigo'];
		require('../../controlador/conexion.php');
		include '../../includes/cabecera2.php';
		$conn = conectar();
		$dato=buscarTipo($cod,$conn);
	?>

	<h2>Usuario: <?=$usu?></h2><br>

	<form action="../../llamadas/procesoTipo.php" method="post">
		
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$dato[0]?>"><br>
		<input type="hidden" name="valor" value="modificar">
		<input type="submit" name="actualizar" value="Actualizar">
	</form>
	<?php
		include '../../includes/pie.php';
	?>
</body>
</html>