<?php
    session_start();
    $perfil="FALSE";//valida si la página actual es o no, el perfil;
    if(isset($_SESSION["usuarioActual"]))
    {
        require_once("con01.php");
    }else if(isset($_SESSION["usuarioTemporal"]))
        {
            
        }

?>