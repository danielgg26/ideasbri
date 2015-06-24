<div class="col-md-6 col-md-offset-3">
	<div class="form-group">
		{!!Form::text('titulo',old('titulo'),['class'=>'form-control floating-label','placeholder'=>'Título'])!!}
	</div>
	<div class="form-group">
		{!!Form::textarea('resumen',old('resumen'),['class'=>'form-control floating-label','placeholder'=>'Resumen','rows' => '2'])!!}
	</div>
	<div class="form-group">
		{!!Form::textarea('materiales',old('materiales'),['class'=>'form-control floating-label','placeholder'=>'Materiales','rows'=>'3'])!!}
	</div>
	<div class="form-group">
		{!!Form::textarea('descripcion',old('descripcion'),['class'=>'form-control floating-label','placeholder'=>'Descripción','rows'=>'4'])!!}
	</div>
	<div class="form-group">
		{!!Form::text('imagenmatet',old('imagenmatet'),['class'=>'form-control floating-label','placeholder'=>'Foto Materiales'])!!}
		{!!Form::file('imgmateriales')!!}
	</div>
	<div class="form-group">
		{!!Form::text('imagencollat',old('imagencollat'),['class'=>'form-control floating-label','placeholder'=>'Imagen Collage'])!!}
		{!!Form::file('imgcollage')!!}
	</div>
	<div class="form-group">
		{!!Form::text('imagenindt',old('imagenindt'),['class'=>'form-control floating-label','placeholder'=>'Imagen Presentación'])!!}
		{!!Form::file('imgindividual')!!}
	</div>
	<div class="form-group">
		{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-success'])!!}
		<a href="{{URL::previous()}}" class="btn btn-warning">Regresar</a>
	</div>
</div>