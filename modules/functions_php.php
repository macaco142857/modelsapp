<?php
#functions_php.php

function fullData($datosPerfil)
{
	foreach ($datosPerfil as $value) 
		if(is_null($datosPerfil['$value']))
			return FALSE;
	return TRUE;
}
                                   //if(!fullData())
                                      echo  
                                        '<div class="dashProf dashProfForm">
                                             No has completado tu perfil completamente, para hacerlo haz <a href="secondFomMod.php">click aquí</a>
                                        </div>'
?>