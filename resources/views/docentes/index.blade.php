@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4">Docentes</h2>
    <a href="{{ route('docentes.create') }}" class="btn btn-primary">+ Nuevo docente</a>
</div>

<form method="GET" class="row g-2 mb-3">
    <div class="col-md-4">
        <input type="text" name="apellido" value="{{ request('apellido') }}" class="form-control" placeholder="Buscar por apellido...">
    </div>
    <div class="col-md-4">
        <input type="text" name="dni" value="{{ request('dni') }}" class="form-control" placeholder="Buscar por DNI...">
    </div>
    <div class="col-md-4">
        <button class="btn btn-outline-secondary">Buscar</button>
    </div>
</form>

<table class="table table-striped table-hover bg-white">
    <thead>
    <tr>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Mail ABC</th>
        <th class="text-end">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @forelse($docentes as $docente)
        <tr>
            <td>{{ $docente->apellido }}</td>
            <td>{{ $docente->nombre }}</td>
            <td>{{ $docente->dni }}</td>
            <td>{{ $docente->telefono }}</td>
            <td>{{ $docente->mail_abc }}</td>
            <td class="text-end">
                <a href="{{ route('docentes.show', $docente) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('docentes.edit', $docente) }}" class="btn btn-sm btn-warning">Editar</a>
                <a href="{{ route('docentes.materias', $docente) }}" class="btn btn-sm btn-secondary">Materias</a>
                <form action="{{ route('docentes.destroy', $docente) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que querés eliminar?');">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="6" class="text-center">No hay docentes cargados.</td></tr>
    @endforelse
    </tbody>
</table>
@endsection
