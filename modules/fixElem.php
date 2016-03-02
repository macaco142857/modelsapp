<button id="showMenu"><span></span></button>
<div class="logohome">
    <img src="img/logo_mapp_wh.png" alt="">
</div>
<!--div class="homeReg">
    <p>Hola <b>Pepita Perez</b>, <a href="javascript:;">cerrar sesión</a></p>
    <a href="javascript:;" class="btn js-openModal" data-id="initSesion">
</div-->
<div class="homeReg">
	<?php 
		if(isset($_SESSION["usuarioActual"]))
		{
			if($perfil=="TRUE") 
				echo ' <a href="modules/sessionEnd.php" class="btn js-openModal" >
							Cerrar sesión';
			else
				echo ' <a href="profile.php" class="btn js-openModal" >'
						.$_SESSION['nombre'];
		}
		else 
			echo '<a href="javascript:;" class="btn js-openModal" data-id="initSesion">
					Iniciar sesión';
		echo "</a>" ;
	?>
</div>
<div class="homeFoot">
    <p>
        ModelsApp ® 2015 | <a href="javascript:;">Politicas de privacidad</a> | <a href="javascript:;">Términos del servicio</a> | Síguenos en: <a href="javascript:;">Facebook</a> - <a href="javascript:;">Twitter</a> - <a href="javascript:;">Instagram</a>
    </p>
    <p>Powered by ARKA ®</p>
</div> 