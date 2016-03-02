<?php
     echo
	'
		<div class="dashProf dashProfInfo">
			<div class="dashProfInfoItem">
				<span>Naciste el <i>'.$_SESSION["edad"]. '</i></span>
			</div>
		<div class="dashProfInfoItem">
				<span>Eres de <i>' . $_SESSION["L_Nacimiento"] . '</i></span>
			</div>
			<div class="dashProfInfoItem">
				<span>Resides en <i>' . $_SESSION["residencia"] . '</i></span>
			</div>
			<div class="dashProfInfoItem">
				<span>Tu correo electrónico es: <i>' . $_SESSION["correo"] . '</i></span>
			</div>
			<hr>
			<div class="dashProfInfoItem">
				<span>Tienes el cabello <i>' . $_SESSION["descrip"] . '</i></span>
			</div>
		</div>
     ';
?>