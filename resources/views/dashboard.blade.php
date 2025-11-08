@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 mb-3">
        <h1 class="h3">Panel principal</h1>
        <p class="text-muted">Seleccioná qué querés gestionar.</p>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
                <h5>Docentes</h5>
                <p class="text-muted">ABM de docentes y materias dictadas.</p>
                <a href="{{ route('docentes.index') }}" class="btn btn-sm btn-primary">Ir al listado</a>
            </div>
        </div>
    </div>

    @if(auth()->user() && auth()->user()->is_admin)
    <div class="col-md-3">
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
                <h5>Usuarios</h5>
                <p class="text-muted">Crear, editar y cambiar contraseñas.</p>
                <a href="{{ route('usuarios.index') }}" class="btn btn-sm btn-secondary">Administrar</a>
            </div>
        </div>
    </div>
    @endif

    <div class="col-md-3">
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
                <h5>README</h5>
                <p class="text-muted">Instrucciones de instalación.</p>
                <a href="{{ route('readme') }}" class="btn btn-sm btn-outline-primary">Ver</a>
            </div>
        </div>
    </div>
</div>
@endsection
