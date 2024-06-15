@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between  border-bottom mt-3  mb-3">   
	<h2>Estudiantes</h2>
	<div >
    	<a class="btn btn-primary" href="/estudiantes/create">Nueva</a>
	</div>
</div>

<table class="table">
	<thead>
    	<tr>
        	<th>Nombre</th>
        	<th>Apellido</th>
        	<th>Email</th>
            <th>Edad</th>
            <th>Institución</th>
        	<th class="text-center">Acciones</th>
    	</tr>
	</thead>
	<tbody>
    	@foreach($estudiantes as $fila)
    	<tr>
        	<td>{{ $fila->nombre }}</td>
            <td>{{ $fila->apellido}}</td>
            <td>{{ $fila->email}}</td>
            <td>{{ $fila->edad}}</td>
        	<td>{{ $fila->institucion->nombre }}</td>
        	<td class="text-center">
            	<a class="btn btn-secondary" href="/estudiantes/edit/{{ $fila->id }}">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a class="btn btn-danger" href="/estudiantes/delete/{{ $fila->id }}">
                	<i class="bi bi-trash"></i>
            	</a>
        	</td>
    	</tr>
    	@endforeach
	</tbody>
</table>
@endsection
