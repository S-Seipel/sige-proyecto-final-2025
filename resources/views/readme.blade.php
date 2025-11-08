@extends('layouts.app')

@section('content')
<h2 class="h4 mb-3">README - Instalación</h2>
<div class="card card-body bg-white">
    <p><strong>1.</strong> Clonar el proyecto o copiar los archivos en el servidor.</p>
    <p><strong>2.</strong> Crear la base de datos <code>sistema_sige</code> en MySQL.</p>
    <p><strong>3.</strong> Configurar el archivo <code>.env</code> con los datos de conexión.</p>
    <p><strong>4.</strong> Ejecutar las migraciones y seeders si existen.</p>
    <p><strong>5.</strong> Ingresar al sistema con el usuario administrador creado.</p>
    <p>Este apartado está porque el trabajo lo pide explícitamente.</p>
</div>
@endsection
