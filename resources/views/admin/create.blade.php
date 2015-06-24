@extends('app')

@section('content')
<div class="jumbotron">
    <h2>Agregar {{$secct}}</h2>
    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Upss!</strong> Hubo algunos problemas con tu registro.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="container">
		<form class="form-horizontal" role="form" method="POST" action="{{ url($secc) }}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@include('admin.createform')
		</form>
	</div>
</div>
@endsection