@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Usuarios del sistema</h2>

<table class="table table-striped bg-white">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th class="text-end">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->is_admin ? 'Administrador' : 'Estándar' }}</td>
            <td class="text-end">
                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
