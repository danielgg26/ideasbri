<!DOCTYPE html>
<html>
	<head>
		@include('principal.head')
    	<title>{{$secct}} - {{$registros->titulo}}</title>
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
						<h1>{{$secct}}<span>Diseña, crea, conoce</span></h1>
					</header>
				</div>
				<div class="col-md-3 col-md-offset-5">
					<img class="img-rounded" src="{{asset('librerias/img/logop.jpg')}}"></a>
				</div>
			</div>
		</div>

		@include('principal.header')
		<!--Anuncios-->

		<div class="container">
			@if (Auth::guest())
						<!--<li><a href="{{ url('/auth/register') }}">Registrar</a></li>-->
			@else
			<a href="#" class="alert-link">
				<div class="col-md-4 col-md-offset-4">
					<div class="alert alert-info" role="alert">
  						Regresar a panel de administración.
  					</div>
				</div>
			</a>
				<div class="container">
					<ul class="pager">
  						<li class="previous"><a href="{{ URL::previous() }}">&larr; Regresar a panel</a></li>
					</ul>
				</div>
			@endif
			<div class="row">
				<h1>{{$registros->titulo}}</h1><br>
			</div>

			<div class="row">
				<div  class = "col-md-6">
					<h3 class="text-justify"><p>{!!nl2br(e($registros->materiales))!!}</p></h3>
				</div> 
  				<div  class = "col-md-5" >
  					<img  src= "{{asset('librerias/img/'.$registros->imagenmate)}}" class= "img-rounded" width='90%' height='90%'>
  					<div class="row">
						<div class="fb-share-button" data-href="#"></div>
					</div>
  				</div> 
			</div>

			<br>

			<div class="row">
				<div class="col-md-12">
					<h4 class= "text-justify"><p>{!!nl2br(e($registros->descripcion))!!}</p></h4>
				</div>
			</div>

			<br><br>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
  					<img  src= "{{asset('librerias/img/'.$registros->imagencomp)}}" class= "img-rounded" width='100%' height='100%'>
  				</div>
			</div>
		</div>

		<div class="container">
			<ul class="pager">
  				<li class="next"><a href="{{ URL::previous() }}">&larr; Regresar</a></li>
			</ul>
		</div>

		<!-- Anuncios --><br>
		<!-- Coment FB -->
		@include('principal.footer')
	</body>
</html>