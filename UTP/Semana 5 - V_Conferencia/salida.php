<?php
	$hor = $_GET['horas'];
	$tar = $_GET['tarifa'];

	$pago = $hor*$tar;

	echo "Las horas trabajadas son ".$hor."<br>";
	echo "La tarfifa es {$tar} <br>";
	echo "El pago final es $pago <br>";
?>