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
	<table>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Foto</th>
			<th>Tipo</th>
			<th colspan="2">Acciones</th>
		</tr>
		<?php
		foreach (listarProducto($conn) as $key => $value) {
		?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td><?=$value[2]?></td>
				<td><img src="../../imagenes/<?=$value[3]?>" width="150" height="150"></td>
				<td><?=$value[4]?></td>
				<td>
					<a href="../../llamadas/procesoProducto.php?valor=eliminar&codigo=<?=$value[0]?>">Eliminar</a>
				</td>
				<td>
					<a href="editar.php?codigo=<?=$value[0]?>">Modificar</a>
				</td>
			</tr>
		<?php
		}
		?>

	</table>	
</body>
</html>