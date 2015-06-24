@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
  				<div class="col-md-4">
						<h1>Moda</h1>	
  				</div>
  				<div class="col-md-2 col-md-offset-6">
  					<p><a href="{{ url('/moda/create') }}" class="btn btn-primary btn-sm">Agregar</a></p>
  				</div>
			</div>
			
			<table class="table table-striped">
				<thead>
					<th>Título</th>
					<th>Creado</th>
					<th>Modificado</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($modas as $moda)
                	<tr class="active">
                    	<td>{{ $moda->titulo }}</td>
                    	<td>{{ $moda->created_at->format('d M Y, h:ia') }}</td>
                    	<td>{{ $moda->updated_at->format('d M Y, h:ia') }}</td>
                    	<td align="center">
                        	<a href="{{url('/moda/'.$moda->id.'/edit')}}" class="btn btn-info btn-xs" style="margin-right: 1px;">Editar</a>
                        </td>
                        <td align="center">
                        	{!! Form::open(['url' => '/moda/'.$moda->id, 'method' => 'DELETE']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs', 'onclick'=>'return confirm("Desea eliminar el registro?")'])!!}
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