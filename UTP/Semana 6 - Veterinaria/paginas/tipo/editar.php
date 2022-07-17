<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$cod = $_REQUEST['codigo'];
		require('../../controlador/conexion.php');
		$conn = conectar();
		$dato=buscarTipo($cod,$conn);
	?>

	<form action="../../llamadas/procesoTipo.php" method="post">
		
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$dato[0]?>"><br>
		<input type="hidden" name="valor" value="modificar">
		<input type="submit" name="actualizar" value="Actualizar">
	</form>
</body>
</html>