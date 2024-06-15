@extends('layouts.app')

@section('content')
<div class="border-bottom mt-3  mb-3">
	<h2>Nuevo Estudiante</h2>
</div>
<form action="/estudiantes/store" method="post">
	@csrf
	<div class="mb-3">
    	<label for="inputInstituciones" class="form-label">Instituciones</label>
    	<select class="form-select" name="institucion" id="inputInstituciones" required>
			<option value="">Seleccion</option>
			@foreach($instituciones as $institucion)
			<option value="{{$institucion->id}}">{{$institucion-> nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="mb-3">
    	<label for="inputNombre" class="form-label">Nombres</label>
    	<input type="text" class="form-control" id="inputNombre" name="nombre" />
	</div>
    <div class="mb-3">
    	<label for="inputApellido" class="form-label">Apellidos</label>
    	<input type="text" class="form-control" id="inputApellido" name="apellido" />
	</div>
    <div class="mb-3">
    	<label for="inputEmail" class="form-label">Email</label>
    	<input type="email" class="form-control" id="inputEmail" name="email" />
	</div>
    <div class="mb-3">
    	<label for="inputEdad" class="form-label">Edad</label>
    	<input type="number" class="form-control" id="inputEdad" name="edad" />
	</div>
	
	<div class="mb-3">
    	<button type="submit" class="btn btn-primary">Guardar</button>
    	<a class="btn btn-secondary" href="{{ route('estudiantes.index') }}">Cancelar</a>
	</div>
</form>
@endsection
