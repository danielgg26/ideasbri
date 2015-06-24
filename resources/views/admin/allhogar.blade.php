@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
  				<div class="col-md-4">
						<h1>Hogar</h1>	
  				</div>
  				<div class="col-md-2 col-md-offset-6">
  					<p><a href="{{ url('/hogar/create') }}" class="btn btn-primary btn-sm">Agregar</a></p>
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
					@foreach ($hogars as $hogar)
                	<tr class="active">
                    	<td>{{ $hogar->titulo }}</td>
                    	<td>{{ $hogar->created_at->format('d M Y, h:ia') }}</td>
                    	<td>{{ $hogar->updated_at->format('d M Y, h:ia') }}</td>
                    	<td align="center">
                        	<a href="{{url('/hogar/'.$hogar->id.'/edit')}}" class="btn btn-info btn-xs" style="margin-right: 1px;">Editar</a>
                        </td>
                        <td align="center">
                        	{!! Form::open(['url' => '/hogar/'.$hogar->id, 'method' => 'DELETE']) !!}
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