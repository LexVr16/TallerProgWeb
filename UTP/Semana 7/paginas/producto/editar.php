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
		include '../../includes/cabecera2.php';
	?>

	<h2>Usuario: <?=$usu?></h2><br>

	<?php
		include '../../includes/pie.php';
	?>
</body>
</html>