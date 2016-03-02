 <?php 

	    if($privado=="TRUE" && isset($_SESSION["usuarioActual"]))
	    {
	    }else
	    {
	    	header ("Location: ../indexMod.php");
	    }
 
 ?>