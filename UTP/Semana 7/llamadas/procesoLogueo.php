<?php
	session_start();
	require('../controlador/conexion.php');
	$conn = conectar();

	$usu = $_REQUEST['usuario'];
	$pas = $_REQUEST['pass'];

	$fil = validarUsuario($conn,$usu,$pas);
	if($fil>0){
		$_SESSION['usuario'] = $usu;
		setcookie('micookie', $usu, time()+60, 'localhost');
		header('location:../paginas/administrador.php');
	}
	else{
		echo '<script>alert("Usuario o contraseña inválida");window.history.back();</script>';
	}




?>
