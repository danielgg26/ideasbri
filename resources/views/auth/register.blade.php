@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registrar</div>
				<div class="panel-body">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('user') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								{!!Form::text('name',old('name'),['class'=>'form-control floating-label','placeholder'=>'Nombre'])!!}
							</div>
							<div class="form-group">
								{!!Form::email('email',old('email'),['class'=>'form-control floating-label','placeholder'=>'Correo Electrónico'])!!}
							</div>
							<div class="form-group">
								{!!Form::text('username',old('username'),['class'=>'form-control floating-label','placeholder'=>'Usuario'])!!}
							</div>
							<div class="form-group">
								{!!Form::password('password',['class'=>'form-control floating-label','placeholder'=>'Contraseña'])!!}
							</div>
							<div class="form-group">
								{!!Form::password('password_confirmation',['class'=>'form-control floating-label','placeholder'=>'Confirmar Contraseña'])!!}
							</div>
							<div class="form-group">
								{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-success'])!!}
							</div>
						</div>

						<!--<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Correo Electrónico</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Usuario</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success">
									Registrar
								</button>
							</div>
						</div>-->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
