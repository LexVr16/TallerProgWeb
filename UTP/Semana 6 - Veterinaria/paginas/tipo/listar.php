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
			<th colspan="2">Acciones</th>
		</tr>
		<?php
		foreach (listarTipo($conn) as $key => $value) {
		?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td>
					<a href="../../llamadas/procesoTipo.php?valor=eliminar&codigo=<?=$value[0]?>">Eliminar</a>
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