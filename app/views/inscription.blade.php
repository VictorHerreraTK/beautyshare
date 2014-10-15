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
	{{ HTML::script('js/form-multistep.js') }}


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
<body class="mysite">
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header navbar-left">
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="nav navbar-nav" sty>
			<h1 class="nav-main-title">My Site</h1>
		</div>
		<div class="navbar-right">
			
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<!-- multistep form -->
<form id="msform">
	<!-- progressbar -->
	<h1>My Site</h1>
	<ul id="progressbar">
		<li class="active">1</li>
		<li>2</li>
		<li>3</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<div>
			<h3 class="fs-subtitle">¿Qué es lo que te motiva a empezar tu propio negocio?</h3>
			<div class="col-md-4">
				<img src="http://placehold.it/200x200" class="img-responsive">
				{{ Form::radio('site-img', 1, false, ['class' => 'field']) }}
			</div>
			<div class="col-md-4">
				<img src="http://placehold.it/200x200" class="img-responsive">
				{{ Form::radio('site-img', 2, false, ['class' => 'field']) }}
			</div>
			<div class="col-md-4">
				<img src="http://placehold.it/200x200" class="img-responsive">
				{{ Form::radio('site-img', 3, false, ['class' => 'field']) }}
			</div>
		</div>
		
			<input type="button" name="next" class="next action-button" value="Next" />
		
	</fieldset>
	<fieldset>
		<div>
			<h2 class="fs-title">¿Lo que estas haciendo hoy, te acerca al lun donde quieres estar mañana?</h2>
			<h3 class="fs-subtitle">Cada día es un nuevo comienzo. Lo mejor, está por venir y con Beauty Share lo puedes lograr. ¿Y tú, dónde quieres estar mañana? ¡Cuéntanos!</h3>
			<input type="text" name="twitter" placeholder="Mi sueño es..." />
			<div class="col-md-6">
				<iframe  src="//www.youtube.com/embed/pHIB5osmZGA?modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			<div class="col-md-6"></div>
		</div>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">We will never sell it</h3>
		<input type="text" name="fname" placeholder="First Name" />
		<input type="text" name="lname" placeholder="Last Name" />
		<input type="text" name="phone" placeholder="Phone" />
		<textarea name="address" placeholder="Address"></textarea>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="Submit" />
	</fieldset>
</form>
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
