@extends('app')

@section('content')
<div class="jumbotron">
    <h2>Editar Comida</h2>
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
		{!! Form::model($comidas, ['role' => 'form', 'url' => '/comida/' . $comidas->id, 'files' => true, 'method' => 'PUT']) !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@include('admin.editform')
		{!! Form::close() !!}
	</div>
</div>
@endsection