<?php
     #no olvidar que esto debe incluirse en un archivo que haya iniciado session.
     //printEvents($_SESSION["eventosAceptados"]);
     
     $codigoEventosProximos='     <div class="dashProf dashProfEvents">
                                         <h1 class="dashTittle">Próximos eventos en los que aplicaste</h1>';
     $presupuesto=144016;
     $pagoFinal=83295;
     //$precios='<a href="tortaPrecios.php >' .$presupuesto.' | '.$pagoFinal .'</a>';
     $nombreEvento="Evento Mr Tea de Nestlé"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".$presupuesto.' | '.$pagoFinal;//.$precios;//$_SESSION['$nombreEvento'];
     $fechaEvento="10 de Enero 2016";
     $fechaFinEvento="15 de Enero 2016";
     $lugarEvento="Corferias centro de convenciones";
     $descripEvento="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur porro voluptatibus, ducimus, voluptatum numquam beatae?";
     $imagEvent="img/ico_mod.png";

     for($i=1; $i<=3;$i++)
     {
          if($i % 2 == 0)
               $imagEvent="img/ico_mod.png";
          else
               $imagEvent="img/ico_co.png";
          $codigoEventosProximos.='<div class="dashProfEventsItem">
                                        <div class="profEventsItemImg">
                                             <img src="'.$imagEvent.'" alt="">
                                        </div>
                                        <div class="profEventsItemData">
                                             <h1>
                                             '.$nombreEvento.
                                             '</h1>
                                             <p class="fechaEvent">Fecha del evento / Desde: <b>'.$fechaEvento.'</b> - Hasta: <b>'.$fechaFinEvento.'</b></p>
                                             <p class="lugarEvent">Lugar: <b>'.$lugarEvento.'</b></p>
                                             <p class="descrEvent"><b>Descripcion: </b>'.$descripEvento.'</p>
                                        </div>
                                        <div class="clear"></div>
                                   </div> '

                                   ;

     }
     $codigoEventosProximos.='<div class="clear"></div>
          </div>';

     echo $codigoEventosProximos;

?>