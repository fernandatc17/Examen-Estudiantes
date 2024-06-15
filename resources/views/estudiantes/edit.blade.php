@extends('layouts.app')

@section('content')
<div class="border-bottom mt-3  mb-3">
	<h2>Editar Estudiante</h2>
</div>
<form action="/estudiantes/update" method="post">
	@csrf
    <input type="hidden" name="id" value="{{ $estudiante->id }}" />
	<div class="mb-3">
    	<label for="inputInstitucion" class="form-label">Institucion</label>
    	<select class="form-select" name="institucion" id="inputInstitucion" required>
			<option value="">Seleccion</option>
			@foreach($instituciones as $institucion)
			<option value="{{$institucion->id}}" @selected($institucion->id==$estudiante->institucion_id) >{{$institucion-> nombre}}</option>
			@endforeach
		</select>
	</div>
    <div class="mb-3">
    	<label for="inputNombre" class="form-label">Nombres</label>
    	<input type="text" class="form-control" id="inputNombre" name="nombre" value="{{$estudiante->nombre}}" />
	</div>
    <div class="mb-3">
    	<label for="inputApellido" class="form-label">Apellidos</label>
    	<input type="text" class="form-control" id="inputApellido" name="apellido"  value="{{$estudiante->apellido}}"/>
	</div>
    <div class="mb-3">
    	<label for="inputEmail" class="form-label">Email</label>
    	<input type="email" class="form-control" id="inputEmail" name="email" value="{{$estudiante->email}}" />
	</div>
    <div class="mb-3">
    	<label for="inputEdad" class="form-label">Edad</label>
    	<input type="number" class="form-control" id="inputEdad" name="edad" value="{{$estudiante->edad}}" />
	</div>
	<div class="mb-3">
    	<button type="submit" class="btn btn-primary">Actualizar</button>
    	<a class="btn btn-secondary" href="{{ route('estudiantes.index') }}">Cancelar</a>
	</div>
</form>
@endsection