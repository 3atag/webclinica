<!DOCTYPE HTML>

<html lang="es">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Clinica Privada Hispano Argentina - Web</title>

		
		<!-- Hojas de CSS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700&display=swap" rel="stylesheet">

		<link href="css/normalize.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />	
		<link href="swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />
		<link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="css/estylo.css" rel="stylesheet" type="text/css" />

	</head>

	<body>

			<?php

				require("encabezado.php");
				

			?>

	        <div id="sliderHead" class="row swiper-container">

	        	<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="images/sliderCovid01.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/sliderCovid02.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/sliderCovid03.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/sliderCovid04.jpg" width="100%" /></div>
							     
						</div>
					
			    <!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>	        	
					
					</div> <!-- Cierre swiper-container -->

	        <main class="contenedor cont-destacados">

	        	<h1>DESTACADOS</h1>

						<div class="articulos-destaca">
						

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/covid19ii.jpg" alt="Covid19 - Informacion Importante">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Permanencia dentro de la institución</h2>
								</a>
								<p>Recomendaciones importantes para acompañantes de pacientes internados....</p>

								<a class="vermas" href="covid19.php">Conocer mas...</a>
							</div>
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/nuestrosimg.jpg" alt="Imagen ortopantomografo">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Nuevo esquema de horarios</h2>
								</a>

								<p>Información importante sobre modificaciones recientes en los horarios de atención de los diferentes servicios.</p>

								<a class="vermas" href="covid19.php">Conocer mas...</a>
							</div>
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/covid19ii.jpg" alt="Covid19 - Informacion Importante">
							</a>	
						
							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">
									<h2>INFORMACIÓN IMPORTANTE</h2>
								</a>
								<p>Significado de contacto, significado de distanciamiento social, periodo de incubación y otros datos que debes conocer...</p>

								<a class="vermas" href="covid19.php">Conocer mas...</a>
							</div>							
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/planaviso.jpg" alt="">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Debito autom&aacute;tico Favacard</h2>
								</a>
								
								<p>Los clientes de FAVACARD podran utilizar el servicio de debito autom&oacute;tico para abonar las cuotas mensuales del Plan de Salud.</p>

								<a class="vermas" href="#">&plus; Conocer mas...</a>
							</div>	
						</article>
						</div>
						
					</main>

	        <?php

			include "privacidad-terminos.html";

			include "pie.php";

			?>
      

	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Scripts de Bootstrap -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Scripts de Swiper -->
	<script type="text/javascript" src="swiper/js/swiper.min.js"></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
		loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',

      },

      autoplay: {
    	delay: 5000,
    	disableOnInteraction: false,
  	  },
    });
 	 </script>


	</body>
</html>
