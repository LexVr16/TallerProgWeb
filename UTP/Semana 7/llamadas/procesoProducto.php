<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$val = $_REQUEST['valor']; 

	if($val==="agregar"){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		$pre = $_REQUEST['precio'];
		$tip = $_REQUEST['tipo'];
		$fot = $_FILES['foto']['name'];
		$ruta = $_FILES['foto']['tmp_name'];
		$destino = '../imagenes/'.$fot;
		copy($ruta, $destino);
		agregarProducto($cod,$nom,$pre,$fot,$tip,$conn);		
	}
	else if($val==="eliminar"){
		$cod = $_REQUEST['codigo'];
		
	}
	else if($val==="modificar"){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		
	}

	header('location:../paginas/producto/listar.php');

?>