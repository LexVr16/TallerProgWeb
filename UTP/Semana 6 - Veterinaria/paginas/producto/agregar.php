<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require('../../controlador/conexion.php');
		$conn = conectar();
	?>
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
</body>
</html>