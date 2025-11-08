@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">Manual de usuario</h2>
<div class="card card-body bg-white">
    <h5>1. Ingreso al sistema</h5>
    <p>Ingrese con su usuario y contraseña provisto por el administrador.</p>

    <h5>2. Menú principal</h5>
    <p>Desde el menú puede acceder a Docentes, Usuarios (si es admin), README y Manual.</p>

    <h5>3. Gestión de docentes</h5>
    <p>En la sección Docentes puede agregar, editar, eliminar y buscar docentes por apellido o DNI.</p>

    <h5>4. Materias dictadas</h5>
    <p>Dentro de cada docente puede cargar la materia, curso, división, día y horario.</p>

    <h5>5. Cambio de contraseña</h5>
    <p>Desde Usuarios (admin) se puede modificar la contraseña de los usuarios estándar.</p>

    <hr>
    <p><em>English version (brief):</em> This system allows you to manage teachers, their personal data and subjects. Use the top menu to navigate.</p>
</div>
@endsection
