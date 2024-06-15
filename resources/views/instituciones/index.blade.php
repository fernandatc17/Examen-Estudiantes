@extends('layouts.app')

@section('content')


<h2>Instituciones</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ubicacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($instituciones as $fila)
        <tr>
            <td>{{ $fila -> nombre }}</td>
            <td>{{ $fila -> ubicacion}}</td>
            <td>
                <a class="btn btn-secondary" href="/users/edit">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a class="btn btn-danger" href="/users/delete">
                    <i class="bi bi-trash3"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection