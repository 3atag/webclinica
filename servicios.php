<!DOCTYPE HTML>

<html lang="es">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Clinica Privada Hispano Argentina - Web</title>

		
		<!-- Hojas de CSS -->
		<link href="../css/normalize.css" rel="stylesheet" type="text/css" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />	
		<link href="../swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />	
		<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="../css/estylo.css" rel="stylesheet" type="text/css" />

	</head>

	<body>
		<section class="container-fluid">
			
			<?php
			
				$profundidad = 1;

				require_once("../ajustar_profundidad.php");

				require("../encabezado.php")

			?>

	        <div id="contInstitucional" class="row">

	        	<div class="col-12 encabezado-subpaginas-nuestros d-flex">
	        	
	        		<h1 class="align-self-end">Nuestros servicios</h1>

	        	</div>


	        	<div class="col-12 col-md-3 menu-subpaginas mt-0 mt-md-4">	        		

	        		<nav class="navbar navbar-expand-md navbar-light" role="tablist">
	        			
	        			<button class="boton-submenu ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#submenu-nuestros" aria-controls="submenu-nuestros" aria-expanded="false" aria-label="sub-menu">
        				<span class="fas fa-indent"></span>
      					</button>

						<div class="submenu-nuestros collapse navbar-collapse list-group list-group-flush">
							<a href="#internacion" class="primer-enlace-submenu list-group-item list-group-item-action active" data-toggle="list" role="tab" aria-controls="internacion">Internación</a>
							<a href="#cirugia" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="cirugia">Cirugía</a>
			        		<a href="#guardia" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="guardia">Guardia</a>
			        		<a href="#uti" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="uti">Terapia Intensiva</a>	        				
			        		<a href="#enfermeria" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="enfermeria">Enfermería</a>
			        		<a href="#consul_ext" class="list-group-item list-group-item-action border-bottom-0" data-toggle="list" role="tab" aria-controls="consul_ext">Consultorios Externos</a>

			        		<a href="#imagenes" class="list-group-item list-group-item-action border-bottom-0" data-toggle="list" role="tab" aria-controls="imagenes">Diagnóstico por Imágen</a>

			        		<a href="#analisis" class="list-group-item list-group-item-action border-bottom-0" data-toggle="list" role="tab" aria-controls="analisis">Laboratorio de Análisis Clínicos</a>

			        		<a href="#nefrologia" class="list-group-item list-group-item-action border-bottom-0" data-toggle="list" role="tab" aria-controls="nefrologia">Nefrología y díalisis</a>

			        		<a href="#servicios_m" class="list-group-item list-group-item-action border-bottom-0" data-toggle="list" role="tab" aria-controls="servicios_m">Servicios médicos</a>

		        		</div>

	        		</nav>        		
	        		
	        	</div> <!-- cierre columna izquierda (menu) -->

	        	<div class="col-12 col-md-9 cont-subpaginas mt-0 mt-md-4">

	        		<div class="tab-content" id="nav-tabContent">

	        			<div class="tab-pane fade show active" id="internacion" role="tabpanel" aria-labelledby="internacion">
	        				
	        				<h2>Internación</h2> 

	        				<div class="swiper-container" id="slide-interna">

	        					<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="interna02.jpg" /></div>
							        <div class="swiper-slide"><img src="interna03.jpg" /></div>
							        <div class="swiper-slide"><img src="interna04.jpg" /></div>
							        <div class="swiper-slide"><img src="interna05.jpg" /></div>
							        <div class="swiper-slide"><img src="interna06.jpg" /></div>
	        					</div>

	        					<!-- Añadir paginación -->
   								<div  class="swiper-pagination"></div>
							    <!-- Añadir flechas -->
							    <div class="swiper-button-next"></div>
							    <div class="swiper-button-prev"></div>

	        				</div>		 				

	        				<div class="texto-servicios">
	        					<p>El área de internaciones se distribuye entre PB y primer piso de la institución, donde se internan pacientes clínicos, quirúrgicos.</p>

	        					<p>El servicio integra 38 camas electro-mecánicas y coneccionado a aspiradores y oxigeno central, 9 de las cuales son de tipo INDIVIDUAL. Gran parte de las habitaciones cuenta con TV/LCD, telefono, acceso a internet y baños equipados con elementos de higiene primordiales. Asi como tambien comodidades para los acompañantes.</p>
	        				
	        				</div>        				

	        			</div>



	        			<div class="tab-pane fade show" id="cirugia" role="tabpanel" aria-labelledby="cirugia">
	        				
	        				<h2>Cirugía</h2>

	        					<div class="swiper-container" id="slide-cirugia">

	        						<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="cirugias02.jpg" /></div>
							        <div class="swiper-slide"><img src="cirugias03.jpg" /></div>
							        <div class="swiper-slide"><img src="cirugias04.jpg" /></div>
							        <div class="swiper-slide"><img src="cirugias05.jpg" /></div>
							        <div class="swiper-slide"><img src="cirugias06.jpg" /></div>
	        						</div>

		        					<!-- Añadir paginación -->
	   								<div  class="swiper-pagination"></div>
								    <!-- Añadir flechas -->
								    <div class="swiper-button-next"></div>
								    <div class="swiper-button-prev"></div>

	        					</div>

		        				<div class="texto-servicios">
			        				<p>El servicio cuenta con x quirofanos con mesas de anestesia, acondicionados según las exigencias de normas infectológicas y de bioseguridad, asi como tambien un sector de transferencia correspondiente.</p>
			        				<p>Se cuenta además con columnas de laparoscopía de última generación, un moderno equipamiento para la realización de cirugías traumatológicas, y un arco en C, para asistir a los equipos de cirugía general y traumatología</p>
		        				
		        				</div>

	        			</div>


	        			<div class="tab-pane fade show" id="guardia" role="tabpanel" aria-labelledby="guardia">
	        				
	        				<h2>Guardia</h2>

	        				<div class="swiper-container" id="slide-guardia">

	        					<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="guardias04.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias02.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias03.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias01.jpg" /></div>
	        					</div>

	        					<!-- Añadir paginación -->
   								<div  class="swiper-pagination"></div>
							    <!-- Añadir flechas -->
							    <div class="swiper-button-next"></div>
							    <div class="swiper-button-prev"></div>

	        				</div>		 				

	        				<div class="texto-servicios">
	        					<p>El Servicio de Guardia médica dispone, en forma permanente (24hs), de un plantel de médicos clínicos/generalistas para realizar la atención inicial de pacientes adultos y, en forma parcial (11 hs. a 7 hs. día siguiente), de un plantel de médicos pediatras para la atención inicial de niños de hasta 15 años. Ambos servicios cuentan con todo el instrumental, insumos y servicios auxiliares para la asistencia de pacientes en situaciones de emergencia.</p>
	        					<p>El sector cuenta con 5 camas de observación equipadas con todos los elementos e insumos asociados a la atención inicial de la emergencia médica.</p>
	        				
	        				</div>        			

	        			
	        			</div>

	        			<div class="tab-pane fade show" id="uti" role="tabpanel" aria-labelledby="uti">
	        				
	        				<h2>Terapia Intensiva</h2>
	        			
	        				<div class="swiper-container" id="slide-uti">

	        					<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="guardias04.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias02.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias03.jpg" /></div>
							        <div class="swiper-slide"><img src="guardias01.jpg" /></div>
	        					</div>

	        					<!-- Añadir paginación -->
   								<div  class="swiper-pagination"></div>
							    <!-- Añadir flechas -->
							    <div class="swiper-button-next"></div>
							    <div class="swiper-button-prev"></div>

	        				</div>

	        				<div class="texto-servicios">
	        					<p>La clínica cuenta con 4 camas para este servicio que pertenece al TIPO I, el equipamiento incluye respirador y cardiodesfibrilador.</p>
	        				
	        				</div>    		
	        			
	        			</div>

	        			<div class="tab-pane fade show" id="enfermeria" role="tabpanel" aria-labelledby="enfermeria">
	        				
	        				<h2>Enfermería</h2>

	        				<div class="swiper-container" id="slide-enfermeria">

	        					<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="enfermeria04.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria02.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria03.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria01.jpg" /></div>
	        					</div>

	        					<!-- Añadir paginación -->
   								<div  class="swiper-pagination"></div>
							    <!-- Añadir flechas -->
							    <div class="swiper-button-next"></div>
							    <div class="swiper-button-prev"></div>

	        				</div>

	        				<div class="texto-servicios">
	        					<p>La clínica cuenta con un Departamento de Enfemería compuesto por profesionales altamente calificados, que funciona como un grupo de trabajo integrado para hacer frente a la demanda de nuestros pacientes.</p>
	        					<p>El control permanente de nuestros pacientes es la clave para brindar un mejor servicio.</p>	        				
	        				</div>    	        

	        				<h3>Servicios que ofrece el departamento</h3>

	        				<div class="texto-servicios">
	        					<ul>
	        						<li>Toma de presión</li>
	        						<li>Curaciones convencionales y curas quemados</li>
	        						<li>Inyecciones</li>
	        						<li>Nebulizaciones</li>
	        					</ul>	        				
	        				</div>    		       				
	        				
	        			</div>

	        			<div class="tab-pane fade show" id="consul_ext" role="tabpanel" aria-labelledby="consul_ext">
	        				
	        				<h2>Consultorios externos</h2>

	        				<div class="swiper-container" id="slide-consultorios">

	        					<div class="swiper-wrapper">								    
							        <div class="swiper-slide"><img src="enfermeria04.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria02.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria03.jpg" /></div>
							        <div class="swiper-slide"><img src="enfermeria01.jpg" /></div>
	        					</div>

	        					<!-- Añadir paginación -->
   								<div  class="swiper-pagination"></div>
							    <!-- Añadir flechas -->
							    <div class="swiper-button-next"></div>
							    <div class="swiper-button-prev"></div>

	        				</div>

	        				<div class="texto-servicios">
	        					<p>Los Policonsultorios anexos de Clínica Hispano están ubicados sobre la calle 9 de Julio 357. Las instalaciones cuentan con 5(cinco) consultorios médicos en PB y 6 (seis) en el Primer Piso. Cubrimos un amplio abanico de especialidades, que son atendidas en forma programada por profesionales de experiencia.</p>	        		    			
	        				</div>    	        

	        				<h3>Los profesionales que actualmente se encuentran brindando sus servicios son:</h3>

	        				<div class="row mt-3">
	        					<div class="col">
	        							<div id="acordeon" class="acordeones">
														
														<!-- Especialidad 1 -->
														<div class="card">
																<div class="card-header" id="heading-anestesiologia">
																		<h4 class="mb-0">
																				<button class="btn btn-link" data-toggle="collapse" data-target="#anestesiologia" aria-expanded="true" aria-controls="anestesiologia">
																					Anestesiología
																				</button>
																		</h4>
																</div> <!-- cierre card-header -->
																
																<div id="anestesiologia" class="collapse" arial-labelledby="heading-anestesiologia" data-parent="#acordeon">

																		<div class="medicos-especialidad card-body">

																				<p><span>Gonzalez Roberto Julio</span> - MP 220183</p>
																				<p><span>Jacovitti Daniel Ivan</span> - MP 95071</p>
																				<p><span>Rey Silvio Jose</span> - MP 112898</p>

																		</div> <!-- Cierre card-body -->

																</div><!-- Cierre anestesiologia -->
																
														</div> <!-- Cierre del card -->

														<!-- Especialidad 2 -->
														<div class="card">
																<div class="card-header" id="heading-cabezacuello">
																		<h4 class="mb-0">
																				<button class="btn btn-link" data-toggle="collapse" data-target="#cabezacuello" aria-expanded="true" aria-controls="cabezacuello">
																					Cirugía Cabeza y Cuello
																				</button>
																		</h4>
																</div> <!-- cierre card-header -->
																
																<div id="cabezacuello" class="collapse" arial-labelledby="heading-cabezacuello" data-parent="#acordeon">

																		<div class="medicos-especialidad card-body">

																				<p><span>Carranza Eduardo</span> - MP 220183</p>

																		</div> <!-- Cierre card-body -->

																</div><!-- Cierre anestesiologia -->
																
														</div> <!-- Cierre del card -->

														<!-- Especialidad 3 -->
														<div class="card">
																<div class="card-header" id="heading-cirugeneral">
																		<h4 class="mb-0">
																				<button class="btn btn-link" data-toggle="collapse" data-target="#cirugeneral" aria-expanded="true" aria-controls="cabezacuello">
																					Cirugía General
																				</button>
																		</h4>
																</div> <!-- cierre card-header -->
																
																<div id="cirugeneral" class="collapse" arial-labelledby="heading-cirugeneral" data-parent="#acordeon">

																		<div class="medicos-especialidad card-body">

																				<p><span>Grignoli Luis</span> - MP 1544</p>

																		</div> <!-- Cierre card-body -->

																</div><!-- Cierre anestesiologia -->
																
														</div> <!-- Cierre del card -->

												</div> <!-- Cierre del acordeon -->

	        					</div>	        				
	        				</div>    		       				
	        				
	        			</div> <!-- cierre Consultorio Externos -->
	        			
	        		</div> <!-- cierre tabs -->
	        		
	        	</div> <!-- cierre columna derecha -->

	        </div> <!-- cierre contenedor -->

	        <?php

	        include "../privacidad-terminos.html";

			include "../pie.php";

			?>
	    
		</section>

	<!-- Scripts -->
	<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
	<!-- Scripts de Bootstrap -->
	<script type="text/javascript" src="../popper.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Scripts de Swiper -->
	<script type="text/javascript" src="../swiper/js/swiper.min.js"></script>

	<script type="text/javascript" src="../javascript.js"></script>

	<!-- Scripts de Swiper -->

	<script>
    	var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    	});

    	/* Soluciona error de solapa activa en bootstrap */
    	$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  		var paneTarget = $(e.target).attr('href');
 		var $thePane = $('.tab-pane' + paneTarget);
  		var paneIndex = $thePane.index();
  		if ($thePane.find('.swiper-container').length > 0 && 0 === $thePane.find('.swiper-slide-active').length) {
   		 swiper[paneIndex].update();
  		}
		});	
    	
  </script>	

	</body>
</html>
