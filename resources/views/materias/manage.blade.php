@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Materias de {{ $docente->apellido }}, {{ $docente->nombre }}</h2>

<div class="row">
    <div class="col-md-6">
        <h5>Agregar materia</h5>
        <form action="{{ route('docentes.materias.store', $docente) }}" method="POST" class="card card-body mb-3">
            @csrf
            <div class="mb-2">
                <label class="form-label required">Materia</label>
                <input type="text" name="materia" class="form-control" required>
            </div>
            <div class="mb-2">
                <label class="form-label required">Curso</label>
                <input type="text" name="curso" class="form-control" required>
            </div>
            <div class="mb-2">
                <label class="form-label required">División</label>
                <input type="text" name="division" class="form-control" required>
            </div>
            <div class="mb-2">
                <label class="form-label required">Día</label>
                <input type="text" name="dia" class="form-control" required placeholder="Lunes, Martes...">
            </div>
            <div class="mb-2">
                <label class="form-label required">Horario</label>
                <input type="text" name="horario" class="form-control" required placeholder="08:00 - 09:30">
            </div>
            <button class="btn btn-success">Agregar</button>
        </form>
    </div>
    <div class="col-md-6">
        <h5>Materias cargadas</h5>
        <ul class="list-group">
            @forelse($docente->materias as $materia)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $materia->materia }} - {{ $materia->curso }}° {{ $materia->division }} - {{ $materia->dia }} {{ $materia->horario }}</span>
                    <form action="{{ route('docentes.materias.destroy', [$docente, $materia]) }}" method="POST" onsubmit="return confirm('¿Eliminar esta materia?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">X</button>
                    </form>
                </li>
            @empty
                <li class="list-group-item">No hay materias.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
