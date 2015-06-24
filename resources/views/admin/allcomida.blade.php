@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
  				<div class="col-md-4">
						<h1>Comida</h1>	
  				</div>
  				<div class="col-md-2 col-md-offset-6">
  					<p><a href="{{ url('/comida/create') }}" class="btn btn-primary btn-sm">Agregar</a></p>
  				</div>
			</div>
			
			<table class="table table-striped">
				<thead>
					<th>Título</th>
					<th>Creado</th>
					<th>Modificado</th>
					<th>Vista previa</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($comidas as $comida)
                	<tr class="active">
                    	<td>{{ $comida->titulo }}</td>
                    	<td>{{ $comida->created_at->format('d M Y, h:ia') }}</td>
                    	<td>{{ $comida->updated_at->format('d M Y, h:ia') }}</td>
                    	<td><a href="{{url('/comida/'.$comida->id)}}" >Ir a artículo...</a></td>
                    	<td align="center">
                        	<a href="{{url('/comida/'.$comida->id.'/edit')}}" class="btn btn-info btn-xs" style="margin-right: 1px;">Editar</a>
                        </td>
                        <td align="center">
                        	{!! Form::open(['url' => '/comida/'.$comida->id, 'method' => 'DELETE']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs', 'onclick'=>'return confirm("Desea eliminar el registro?")'])!!}
                            {!! Form::close() !!}
                        </td>
                	</tr>
                	@endforeach
				</tbody>
			</table>
			{!! $comidas->setPath('')->render() !!}
		</div>
	</div>
</div>
@endsection