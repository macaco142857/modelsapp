<?php

	//if(isset($_POST['nombre'], $_GET['apellido'], $_GET['correo'], $_GET['celular']))

	$guardaNombre=$_POST['nombre'];
	$guardaApellido=$_POST['apellido'];
	$guardaCorreo=$_POST['correo'];
	$guardaCelular=$_POST['celular'];
	$guardaGenero=$_POST['genero'];
	$guardaCiudad=$_POST['ciudad'];
	$id="2.1";//genID($IDinvitacion);

	require_once("con01.php");

	$query="INSERT INTO perfilmodelos (ID, nombre, apellido, celular, correoPersonal, ciudadNacimiento, usuario) VALUES ('$id','$guardaNombre','$guardaApellido','$guardaCelular','$guardaCorreo','$guardaCiudad','$guardaCorreo')";
	$string=
	'
		 <form action="acces.php " method="POST">
		 	 <label for="pass">contraseña</label>
		     <input type="password" name="pass" required/>
		     <input type="hidden" name="user" value= '.$guardaCorreo.'>
		     <input type="hidden" name="genero" value= '.$guardaGenero.'>
		     <button class="" type="submit"> Enviar </button>
		 </form>
	';
	if(mysqli_query( $conexion, $query))
	{
		echo "<h1> Se ha agregado su registro correctamente, su nuevo usuario es: ". $guardaCorreo."</h1>";
		echo "<h2> Ingrese su contraseña </h2>";

		echo "$string";
		
	}else
		echo "<h1> $query </h1>";

?>
