@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
  				<div class="col-md-4">
						<h1>Usuarios</h1>	
  				</div>
  				<div class="col-md-2 col-md-offset-6">
  					<p><a href="{{ url('/user/create') }}" class="btn btn-primary btn-sm">Agregar</a></p>
  				</div>
			</div>

			
			<table class="table table-bordered">
				<thead>
					<th>Nombre</th>
					<th>Username</th>
					<th>Creado</th>
					<th>Modificado</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($users as $user)
                	<tr>
                    	<td>{{ $user->name }}</td>
                    	<td>{{ $user->username }}</td>
                    	<td>{{ $user->created_at->format('d M Y, h:ia') }}</td>
                    	<td>{{ $user->updated_at->format('d M Y, h:ia') }}</td>
                    	<td align="center">
                        	<a href="{{url('/user/'.$user->id.'/edit')}}" class="btn btn-info btn-xs" style="margin-right: 1px;">Editar</a>
                        </td>
                        <td align="center">
                            {!! Form::open(['url' => '/user/'.$user->id, 'method' => 'DELETE']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs'])!!}
                            {!! Form::close() !!}
                        </td>
                	</tr>
                @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection