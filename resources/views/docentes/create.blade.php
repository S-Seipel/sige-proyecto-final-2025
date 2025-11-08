@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Nuevo docente</h2>

<form action="{{ route('docentes.store') }}" method="POST" class="card card-body bg-white shadow-sm">
    @csrf
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label required">Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label required">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label required">DNI</label>
            <input type="text" name="dni" class="form-control" required>
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">CUIL</label>
            <input type="text" name="cuil" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Código Postal</label>
            <input type="text" name="codigo_postal" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Mail ABC</label>
            <input type="email" name="mail_abc" class="form-control">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('docentes.index') }}" class="btn btn-link">Volver</a>
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection

