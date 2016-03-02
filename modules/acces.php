<?php
	/*
		acces.php
		Macaco |10/02/2016|
		control de acceso


		<?php echo ( $perfil=="TRUE")? "modules/sessionEnd.php" : "modules/acces.php" ?>
	*/
	//ini_set('display_errors', 0);
	
	session_start();

	if(isset($_POST['user'],$_POST['pass'])&&$_POST['user']!="" && $_POST['user']!="")
	{
		require ("con01.php");
	//	include ("functions_php.php");
	}else
			header ("Location: ../indexMod.php");

	$formUser= htmlentities($_POST['user']);
	$Pass= htmlentities($_POST['pass']);

	// htmlentities para evitar algunos ataques.

	if(isset($_POST['genero']))//&&passValido($_POST['pass'])
		{
			$Username=$_POST['user'];
			$pass=$_POST['pass'];
			($_POST['genero']=="female")? $gender="modeloM" : $gender="modeloH";
			$creaLoggin="INSERT INTO login (Username,Password,Role) VALUES ('$Username','$pass','$gender') ";
			mysqli_query( $conexion, $creaLoggin);
		}
		else
			header ("Location: ../indexMod.php#4thPage");


		$consulta= "SELECT Username FROM login where Username ='$formUser' AND Password ='$Pass' ";
		$usuario = mysqli_query( $conexion, $consulta);  //  
		$rows= mysqli_num_rows($usuario);      
		$fila=mysqli_fetch_array($usuario);

		echo "$formUser";

		if($rows>0)
		{
		      //variables de sesión para saber si se está o no "logueado"
		      $_SESSION["Logged"] = TRUE; 
		      $_SESSION["usuarioActual"] = "$formUser";;
		      //nombre del usuario logueado. 
		      
		      $consulta="SELECT * FROM perfilmodelos WHERE Usuario='$formUser'";
		      $perfilData= mysqli_query( $conexion, $consulta);
		      $fila=mysqli_fetch_array($perfilData);

		      //---------variables de perfil------------------

		      $_SESSION["idModelo"]=$fila['ID'];
		      $_SESSION["nombre"]=$fila['nombre'];
		      $_SESSION["apellido"]=$fila['apellido'];
		      $_SESSION["celular"]=$fila['celular'];
		      $_SESSION["direccion"]=$fila['direccion'];
		      $_SESSION["categoria"]=$fila['categoria'];
		      $_SESSION["codigos"]=$fila['codigos'];
		      $_SESSION["nivel1"]=$fila['nivel1'];
		      $_SESSION["nivel2"]=$fila['nivel2'];
		      $_SESSION["nivel3"]=$fila['nivel3'];
		      $_SESSION["imgPerfil"]=$fila['imagenPerfil'];
		      $_SESSION["imagenes"]=$fila['imagenes'];
		      $_SESSION["edad"]=$fila['edad'];//CalcularEdad();
		      $_SESSION["L_Nacimiento"]=$fila['ciudadNacimiento'];
		      $_SESSION["residencia"]=$fila['ciudadResidencia'];
		      $_SESSION["correo"]=$fila['correoPersonal'];
		      $_SESSION["descrip"]=$fila['caracteristicas'];
		      $_SESSION["puntuacion"]=$fila['puntuacion'];
		      //$_SESSION["correotrabajo"
		      //$_SESSION["direccionOpcional"]
		      $_SESSION["telefono"]=$fila['telefono'];
		      $_SESSION["EventosPostulados"]=$fila['EventosPostulados'];
		      $_SESSION["eventHistorial"]=$fila['eventHistorial'];


		      //$_SESSION
		
		      //----------------------------------------------
		      //Direccionando al perfil. 
		      header ("Location: ../profile.php");
		   }

		     /* if(!fullData($fila))   //funcion que permite saber si sellenaron todos los campos del registro, caso contrario invita a la modelo a llenar la información faltante.
		      {
		      	
		      }
		      else
		      echo */
		else
			header ("Location: ../indexMod.php#2thPage");

	mysqli_close($conexion); 

?>