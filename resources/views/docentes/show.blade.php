@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Detalle docente</h2>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $docente->apellido }}, {{ $docente->nombre }}</h5>
        <p class="mb-1"><strong>DNI:</strong> {{ $docente->dni }}</p>
        <p class="mb-1"><strong>Teléfono:</strong> {{ $docente->telefono }}</p>
        <p class="mb-1"><strong>Mail ABC:</strong> {{ $docente->mail_abc }}</p>
        <p class="mb-1"><strong>Dirección:</strong> {{ $docente->direccion }}</p>
    </div>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Materias dictadas</span>
        <a href="{{ route('docentes.materias', $docente) }}" class="btn btn-sm btn-secondary">Administrar materias</a>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @forelse($docente->materias as $materia)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $materia->nombre }} - {{ $materia->curso }}° {{ $materia->division }} - {{ $materia->dia }} {{ $materia->horario }}
                </li>
            @empty
                <li class="list-group-item">No tiene materias cargadas.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
