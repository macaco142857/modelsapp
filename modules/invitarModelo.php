<?php
	session_start();
    $perfil="FALSE";//valida si la página actual es o no, el perfil;


    if(isset($_SESSION["usuarioActual"]))
    {
        require_once("con01.php");
    }else if(isset($_SESSION["usuarioTemporal"]))
        {
            
        } // <-- esto es provicional, si se incluye este segmento de código en una página que incuya el header se debe quitar
	

	$privado="TRUE"; 
	include("portero.php");
	$query="SELECT codigos FROM perfilmodelos WHERE ID =".$_SESSION["idModelo"];
	$codigosDB=mysqli_query( $conexion, $query);
	$fila=mysqli_fetch_array($codigosDB);
	$_SESSION['codigos']=$fila["codigos"];
	if($_SESSION['codigos']>0)
	{
		$randHex=dechex(rand(10000,99999));
		$codigoInvitado=$randHex;//guarda el código aleatorio de acceso de invitación para regitrarse en la página.
		$fileName="../invitado/".$_SESSION['idModelo'].".txt";//guarda la dirección del archivo de texto que tendrá los códigos de invitación generados.
		$dateCode=time();//guarda la fecha en la que se generó el códigoen timestamp(cantidad de segundos transcurridos desde 1970 
		$saveText=$codigoInvitado." ".$dateCode.PHP_EOL;//el texto que se guarda en el archivo de texto
		$codeFile=fopen($fileName, "a");//instruccion para acumular en un archivo de texto los códigos y las fechas en que se generaron los mismos 

		if(fputs( $codeFile, $saveText))
		{
			echo "<h1> La clave  de invitación es: ".$_SESSION['idModelo']."-". $codigoInvitado . "</h1>";
		}
		else
		{
			echo "<h6> Error al generar el código </h6>";
		}

		fclose($codeFile);
	}
	else
	{
		$reloj=date("H",time());
		$completar=($reloj>12)?"as tardes ":" día ";
		echo "<h2> buen".$completar. $_SESSION['nombre']." has ocupado todos tus códigos ¡felicitaciones!</h2>";
		
	}

	echo "<a href='../profile.php'> Pa atras mano</a> ";
?>