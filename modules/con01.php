<?php
	#Archivo con01.php tiene el c車digo php que conecta con el host, subido al servidor el 01/02/2016 para prueba por Sebasti芍n Echeverri
	
	require("dataLocal.php");
	$conexion = mysqli_connect($host,$user,$pass,$bd);
	if (!$conexion)
		die('No se ha podido conectar al servidor'.mysqli_error());

?>