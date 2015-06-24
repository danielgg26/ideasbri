<!DOCTYPE html>

<html>
	<head>
		@include('principal.head')
		<title>Ideas Brillantes - {{$secct}}</title>
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

		<br><br>

		<div class="container">
			@foreach ($registros as $registro)
				<div class="col-md-4">
					<a href="{{$secc}}/{{ $registro->id }}" class="thumbnail">
      					<img src="{{asset('librerias/img/'.$registro->imagenfin) }}">
    				</a>
    				<div class="caption">
	        			<h3>{{ $registro->titulo }}</h3>
    	    			<p>{{ $registro->resumen }}</p>
        				<ul class="pager">
  							<li class="next"><a href="registro/{{ $registro->id }}">Ver mas...</a></li>
						</ul>
      				</div>
  				</div>
            @endforeach
		</div>
		<div class="container">
			<div class="col-md-5">
				<ul class="pagination">
					{!!$registros->setPath('')->render()!!}
				</ul>
			</div>
		</div>

		@include('principal.footer')

	</body>
</html> 