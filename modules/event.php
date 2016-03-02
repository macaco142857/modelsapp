<?php
	
	 $nombreEvento="Evento Mr Tea de Nestlé";//$_SESSION['$nombreEvento'];
     $fechaEvento="10 de Enero 2016";//$_SESSION['$nombreEvento'];
     $fechaFinEvento="15 de Enero 2016";//$_SESSION['$nombreEvento'];
     $lugarEvento="Corferias centro de convenciones";//$_SESSION['$nombreEvento'];
     $descripEvento="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur porro voluptatibus, ducimus, voluptatum numquam beatae?";//$_SESSION['$nombreEvento'];
     $imagEvent="img/ico_mod.png";//$_SESSION['$nombreEvento'];
     							
	 $codigoRecomendacionesEvento=' <li>Lorem ipsum dolor.</li>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, natus!</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>';

	$codigoEventos='  <div class="dashProf dashProfEvents">
                    	<h1 class="dashTittle">Eventos en los que aplicaste</h1>';

	for($i=1;$i<20;$i++)
	{
		if($i % 2 == 0)
               $imagEvent="img/ico_mod.png";
          else
               $imagEvent="img/ico_co.png";

		$codigoEventos.=
		'
			<div class="dashProfEventsItem dashProfEventsItemLg">
				<div class="profEventsItemImg profEventsItemImgLg">
					<img src="'.$imagEvent.'" alt="">
				</div>
				<div class="profEventsItemData profEventsItemDataLg">
					<h1>'.$nombreEvento.'</h1>
					<p class="fechaEvent">Fecha del evento / Desde: <b>'.$fechaEvento.'</b> - Hasta: <b>'.$fechaFinEvento.'</b></p>
					<p class="lugarEvent">Lugar: <b>'.$lugarEvento.'</b></p>
					<p class="descrEvent"><b>Descripcion: </b>'.$descripEvento.'</p>
					<a href="javascript:;" class="moreEventInfo js-moreEventInfo"><span>Ver más acerca sobre el evento</span></a>
					<div class="profEventsItemDataHide">
						'//<p class="descrEvent">eto es esto</p>
						//<p class="descrEvent">blbablalbabla</p>
						.'<div class="recEvent">
							<p class=""><b>Recomendaciones del cliente: </b></p>
							<ul>
								'.$codigoRecomendacionesEvento.'
							</ul>
							<a href="javascript:;" class="minusEventInfo js-minusEventInfo"><span>-</span><span> Ver menos sobre el evento</span></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		';
	}


	 $codigoEventos.='	<div class="clear"></div>
    				  </div>';
	echo $codigoEventos;

?>