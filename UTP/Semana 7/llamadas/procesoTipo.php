<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$val = $_REQUEST['valor']; 

	if($val==="agregar"){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		agregarTipo($cod,$nom,$conn);
	}
	else if($val==="eliminar"){
		$cod = $_REQUEST['codigo'];
		eliminarTipo($cod,$conn);
	}
	else if($val==="modificar"){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		actualizarTipo($cod,$nom,$conn);
	}

	header('location:../paginas/tipo/listar.php');

?>