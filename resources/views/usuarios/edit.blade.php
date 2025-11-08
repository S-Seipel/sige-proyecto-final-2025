@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Editar usuario</h2>

<form action="{{ route('usuarios.update', $usuario) }}" method="POST" class="card card-body bg-white">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Rol</label>
        <select name="is_admin" class="form-select">
            <option value="0" @selected(!$usuario->is_admin)>Estándar</option>
            <option value="1" @selected($usuario->is_admin)>Administrador</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nueva contraseña (opcional)</label>
        <input type="password" name="password" class="form-control" placeholder="Dejar vacío para no cambiar">
    </div>
    <button class="btn btn-primary">Guardar cambios</button>
</form>
@endsection
