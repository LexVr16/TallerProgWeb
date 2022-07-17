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
	?>

	<h1>Acceso al sistema</h1>
	<form action="../llamadas/procesoLogueo.php" method="post">
		<label>Usuario</label>
		<input type="text" name="usuario"><br>
		<label>Password</label>
		<input type="password" name="pass"><br>
		<input type="submit" name="aceptar" value="Aceptar">
	</form>

	<?php
		include '../includes/pie.php';
	?>
</body>
</html>