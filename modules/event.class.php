<?php

	class Evento
	{
		public $codigo="";
		private $nombre;//="Evento Mr Tea de Nestlé";//$_SESSION['$nombreEvento'];
	   	private $fechaInicio;//="10 de Enero 2016";//$_SESSION['$nombreEvento'];
	    private $fechaFin;//="15 de Enero 2016";//$_SESSION['$nombreEvento'];
	    private $lugar;//="Corferias centro de convenciones";//$_SESSION['$nombreEvento'];
	    private $descripcion;//="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur porro voluptatibus, ducimus, voluptatum numquam beatae?";//$_SESSION['$nombreEvento'];
	    private $imagEvent;//="img/ico_mod.png";//$_SESSION['$nombreEvento'];
	    private $estado; //estados posibles 'postular', 'cerrado', 'cancelado', 'finalizado'
	    private $empresa;
	    private $hora;
	    private $recomendaciones;
	    private $telefono;
	    private $postulantes;
	    private $asistentes;
	    
		function __construct($eName, $eDate, $endDate, $ePlace, $eDescrip, $eImagen, $estate, $eEmpresa, $eHora, $eRecomendaciones, $eTelefono, $ePostulantes, $eAsistentes)
		{
			$nombreEvento=$eName;
		   	$fechaEvento=$eDate;
		    $fechaFinEvento=$endDate;
		    $lugarEvento=$ePlace;
		    $descripEvento=$eDescrip;
		    $imagEvent=$imagen;
		    $estado=$estate;
	    	$empresa=$eEmpresa;
	    	$hora=$eHora;
	     	$recomendaciones=$eRecomendaciones;
	     	$telefono=$eTelefono;
	    	$postulantes=$ePostulantes;
	     	$asistentes=$eAsistentes; 							
		}

		
	}
?>