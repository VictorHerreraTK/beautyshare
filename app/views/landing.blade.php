<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing Page</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/general.css') }}
	{{ HTML::style('css/idangerous.swiper.css') }}
	{{ HTML::style('css/idangerous.swiper.scrollbar.css') }}
	{{ HTML::style('css/responsive.css') }}
	{{ HTML::style('css/landing.css') }}

	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{ HTML::script('js/idangerous.swiper-2.1.min.js') }}
	{{ HTML::script('js/main.js') }}


	<style type="text/css">
		.nav-main-title{
			font-size: 1em;
		}
		.img-container.company-image {
			height: 450px;
			display: table-cell;
			vertical-align: bottom;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header navbar-left">
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="nav navbar-nav" sty>
			<h1 class="nav-main-title">Beauty Share</h1>
		</div>
		<div class="navbar-right">
			<button type="button" class="btn btn-default navbar-btn">Iniciar Sesión</button>
			<button type="button" class="btn btn-primary navbar-btn">Inscríbete</button>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row banner">
		<img class="image-banner image-1" src="http://www.freeartwallpapers.com/wp-content/uploads/2014/08/old-paper-floral-parchment-background-texture1.jpg">
		<img class="image-banner image-2" src="http://trickvilla.com/wp-content/uploads/Light-Wood-Background.jpg">
		<img class="image-banner image-3" src="http://digitoolsolutions.com/new/wp-content/uploads/2014/03/black-hd-background.jpg">
		<div class="col-md-7">
			<h3>Comienza tu propio negocio como asesora de belleza</h3>
			<ul>
				<li>Queremos impulsar los sueños de mujeres como tú</li>
				<li>Logra tus metas disfrutando lo que haces, lo extraordinario es posible</li>
				<li>Obtén un 35% de descuento en nuestros productos, con una inversión mínima</li>
			</ul>
		</div>
		<div class="col-md-5">
			<form class="form-horizontal form-horizontal-top"a role="form" action={{route('register')}} method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="username" id="name" placeholder="Nombre Completo">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label><input type="checkbox">Soy mayor de 18 años y no soy consultora de Belcorp</label>
					</div>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-default inscription-submit-top">Inscríbete</button><br>
					<button type="button" class="btn btn-primary">Inscríbete con Facebook</button>
				</div>
			</form>
		</div>

		<div class="swiper-container-3">
		    <div class="swiper-wrapper">
		    	<div class="swiper-slide red-slide">
		        	<h1>Hola</h1>
		      	</div>
			   	<div class="swiper-slide blue-slide">
					<h1>Que</h1>
				</div>
				<div class="swiper-slide orange-slide">
					<h1>Hace</h1>
				</div>
			</div>
		</div>

		<div id="brands-banner">
			
		</div>
	</div>

	<div class="row">

	<div class="row">
		<div class="col-md-12">
			<h2 class="steps-title">Crea tu página en 3 simples pasos</h2>
		</div>
		<div class="col-md-4">
			<div class="steps-container">
				<img src="http://placehold.it/350x350" class="img-rounded img-responsive">
				<div class="caption">
					<h3>Elige el look de tu página web</h3>
					<p>
						Seleciona el fondo de pantalla que más te guste. No
						te preocupes, lo puedes cambiar cuando quieras. Luego edita tu perfil
						y agrega tus redes sociales.
					</p>
				</div>
			</div>

		</div>
		<div class="col-md-4">
			<div class="steps-container">
				<img src="http://placehold.it/350x350" class="img-rounded img-responsive">
				<div class="caption">
					<h3>Recomienda los productos, tú eres la experta</h3>
					<p>
						Tus clientes buscan lo mejor. Asesóralos con todo el contenido necesario para una compra exitosa.
					</p>
				</div>
			</div>

		</div>
		<div class="col-md-4">
			<div class="steps-container">
				<img src="http://placehold.it/350x350" class="img-rounded img-responsive">
				<div class="caption">
					<h3>Comparte la belleza</h3>
					<p>
						Envía tu página a todos tus amigos y empieza a lograr tus sueños.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>Nosotros nos encargamos de los detalles</h2>
			<div class="row">
				<div class="col-md-6 details-container details-detail">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<img src="http://placehold.it/150x150" class="img-responsive">
							</div>
							<div class="col-md-8 caption">
								<h3>Creamos tu propio dominio</h3>
								<p>
									Tú sólo debes elegirlo<br>
									www.tunombre.com
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 details-container details-detail">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<img src="http://placehold.it/150x150" class="img-responsive">
							</div>
							<div class="col-md-8 caption">
								<h3>Enviamos todos tus pedidos</h3>
								<p>
									Tus clientes recibirán tus pedidos sin problemas ¡El delivery va por nuestra cuenta!
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 details-container details-detail">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<img src="http://placehold.it/150x150" class="img-responsive">
							</div>
							<div class="col-md-8 caption">
								<h3>Cobramos por ti</h3>
								<p>
									¡Nosotros nos encargaremos! Aceptamos tarjetas de crédito, débito y depósitos bancarios.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 details-container details-detail">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<img src="http://placehold.it/150x150" class="img-responsive">
							</div>
							<div class="col-md-8 caption">
								<h3>Te ayudamos a administrar tu negocio</h3>
								<p>
									Te ayudamos a administrar tu negocio de la mejor manera ¡Te decimos cómo ganar más!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>Estás en buena compañía</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-container company-image">
							<img src="http://placehold.it/350x450" class="img-responsive">
						</div>
						<div class="caption">
							<h4>Valeria Vargas</h4>
							<p>
								Es reconfortante saber que tengo mi negocio en mis propias manos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-container company-image">
							<img src="http://placehold.it/350x350" class="img-responsive">
						</div>
						<div class="caption">
							<h4>Valeria Vargas</h4>
							<p>
								Es reconfortante saber que tengo mi negocio en mis propias manos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-container company-image">
							<img src="http://placehold.it/350x150" class="img-responsive">
						</div>
						<div class="caption">
							<h4>Valeria Vargas</h4>
							<p>
								Es reconfortante saber que tengo mi negocio en mis propias manos.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		    	<div class="swiper-slide red-slide">
		        	
		      	</div>
			   	<div class="swiper-slide blue-slide">
					
				</div>
				<div class="swiper-slide orange-slide">
					
				</div>
			</div>
		    <div class="pagination"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>¡Tu sueño merece ser cumplido</h2>
			<h3>Nosotros te ayudaremos en cada paso</h3>
			<div class="col-md-5">
				<form class="form-horizontal form-horizontal-bottom" role="form">
					<div class="form-group">
						<input type="text" class="form-control" id="name" placeholder="Nombre Completo">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox">Soy mayor de 18 años y no soy consultora de Belcorp</label>
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default inscription-submit-bottom">Inscríbete</button><br>
						<button type="button" class="btn btn-primary">Inscríbete con Facebook</button>
					</div>
				</form>
			</div>
			<div class="col-md-7">
				<div class="row">
					<h4>¿Tienes alguna duda? Te ayudamos a resolverla</h4>
					<div class="col-md-4 videos-web">

						<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

					</div>
					<div class="col-md-4 videos-web">
						<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4 videos-web">
						<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>

					<div class="swiper-container-2">
					    <div class="swiper-wrapper">
					    	<div class="swiper-slide red-slide">
					        	<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					      	</div>
						   	<div class="swiper-slide blue-slide">
								<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="swiper-slide orange-slide">
								<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					    <div class="pagination"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="text-align:center">
						<a target="_blank" href="#" class="btn btn-primary">Preguntas frecuentes</a><br>
						<a target="_blank" href="#" class="btn btn-default">Envíanos tu pregunta</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Libro de reclamaciones</a></li>
			<li><a href="#">Términos</a></li>
			<li><a href="#">Privacidad</a></li>
		</ul>
	</div>
</nav>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
