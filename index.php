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

				require("encabezado.php")

			?>

	        <div id="sliderHead" class="row swiper-container">

	        	<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="images/slider001.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/slider002.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/slider003.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/slider004.jpg" width="100%" /></div>
							<div class="swiper-slide"><img src="images/slider005.jpg" width="100%" /></div>	     
						</div>
					
			    <!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>	        	
					
					</div> <!-- Cierre swiper-container -->

	        <main class="contenedor cont-destacados">

	        	<h1>Destacados</h1>

						<div class="articulos-destaca">
						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/preparto1.jpg" alt="Imagene Pla Pre-Parto">
							</a>	
						
							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">
									<h2>Conoce nuestro Plan Pre-Parto</h2>
								</a>
								<p>Lorem Ipsum
									"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
									"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>

								<a class="vermas" href="plandesalud.php">Conocer mas...</a>
							</div>							
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/patagonia.jpg" alt="Logo Banco Patagonia">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Debito autom&aacute;tico Banco Patagonia</h2>
								</a>
								<p>Los clientes del BANCO PATAGONIA podran utilizar el servicio de debito automático para abonar las cuotas mensuales del Plan de Salud.</p>

								<a class="vermas" href="plandesalud.php">Conocer mas...</a>
							</div>
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/pantomografo.jpg" alt="Imagen ortopantomografo">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Incorporaci&oacute;n de Ortopantomografo</h2>
								</a>

								<p>Incorporó un ORTOPANTOMÓGRAFO PLAMECA PROMAX, de origen Finland&eacute;s para uso odontol&oacute;gico provisto de un sistema Laser Triple, que indica con precisi&oacute;n los correctos puntos anat&oacute;micos, de forma que la imagen sea sim&eacute;trica y sin distorsiones.</p>

								<a class="vermas" href="servicios.php">Conocer mas...</a>
							</div>
						</article>

						<article class="articulo-desta">
							<a class="img-destaca" href="#">
								<img src="images/favacard.jpg" alt="">
							</a>

							<div class="contenido-desta">
								<a class="titulo-destaca" href="#">	
									<h2>Debito autom&aacute;tico Favacard</h2>
								</a>
								
								<p>Los clientes de FAVACARD podran utilizar el servicio de debito autom&oacute;tico para abonar las cuotas mensuales del Plan de Salud.</p>

								<a class="vermas" href="plandesalud.php">&plus; Conocer mas...</a>
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
