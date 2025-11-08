@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Editar docente</h2>

<form action="{{ route('docentes.update', $docente) }}" method="POST" class="card card-body bg-white shadow-sm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label required">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ $docente->apellido }}" required>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label required">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $docente->nombre }}" required>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label required">DNI</label>
            <input type="text" name="dni" class="form-control" value="{{ $docente->dni }}" required>
        </div>
        {{-- ... repetís los demás campos igual que en create ... --}}
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('docentes.index') }}" class="btn btn-link">Volver</a>
        <button class="btn btn-primary">Actualizar</button>
    </div>
</form>
@endsection
