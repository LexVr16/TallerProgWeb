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

	<h2>Usuario: <?=$usu?></h2><br>

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
	<?php
		include '../../includes/pie.php';
	?>
</body>
</html>