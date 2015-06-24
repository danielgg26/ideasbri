<!DOCTYPE html>
<html>
	<head>
		@extends('principal.head')
		<title>Ideas Brillantes</title>
	</head>

	<body>
		<div class="linea">
			<hr>
		</div>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<br>
					<br>
					<header>
						<h1>Ideas Brillantes<span>Diseña, crea, conoce</span></h1>
					</header>
				</div>

				<div class="col-md-3 col-md-offset-5">
					<img class="img-rounded" src="{{asset('librerias/img/logop.jpg')}}"></a>
				</div>
			</div>
		</div>
		@include('principal.header')
		
		@include('principal.carousel')
		<br><br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
    				<div class="desc">
    					<p>Ideas brillantes es un sitio que te ayuda a incrementar tu creatividad, mostrándote ideas ingeniosas que puedas llevar a cabo por ti mismo, te daremos a conocer la tecnología más innovadora, deliciosas recetas y algunos consejos para mantener una buena salud.</p>
    				</div>
  				</div>
			</div>
		</div>
		@include('principal.footer')
		<br><br>
	</body>
</html> 