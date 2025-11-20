@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl px-4 py-8 mx-auto">
        <div class="p-6 mb-8 bg-white border border-gray-100 shadow rounded-2xl">
            <h1 class="mb-2 text-3xl font-bold text-gray-900">
                Manual de Usuario – SiGE
            </h1>
            <p class="text-gray-600">
                Sistema de Gestión Escolar – Escuela de Educación Secundaria Técnica N° 3 · Año 2025
            </p>
            <p class="mt-2 text-sm text-gray-500">
                Autor: Santiago Seipel
            </p>
        </div>

        <div class="p-6 mb-8 bg-white border border-gray-100 shadow rounded-2xl">
            <h2 class="mb-4 text-xl font-semibold text-gray-900">
                Índice
            </h2>
            <ol class="space-y-1 text-gray-700 list-decimal list-inside">
                <li>Introducción</li>
                <li>Requisitos del Sistema</li>
                <li>Inicio de Sesión</li>
                <li>Panel de navegacion</li>
                <li>Gestión de Docentes</li>
                <li>Gestión de Materias</li>
                <li>Gestión de Usuarios</li>
                <li>Recuperación de Contraseña</li>
                <li>Seguridad del Sistema</li>
            </ol>
        </div>

        <div class="space-y-8">
            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    1. Introducción
                </h2>
                <p class="leading-relaxed text-gray-700">
                    El Sistema de Gestión Escolar (SiGE) permite cargar, consultar y administrar docentes,
                    materias asociadas y usuarios del sistema. Este manual explica paso a paso todas las
                    funciones que ofrece la plataforma, de forma que cualquier persona pueda utilizarla,
                    incluso usuarios sin experiencia previa en aplicaciones informáticas.
                </p>
                <p class="mt-3 leading-relaxed text-gray-700">
                    A lo largo de este documento se describen las pantallas principales, los botones
                    disponibles y el flujo básico de trabajo dentro del sistema.
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    2. Requisitos del Sistema
                </h2>
                <p class="mb-3 text-gray-700">
                    Para utilizar SiGE correctamente se recomienda contar con:
                </p>
                <ul class="space-y-1 text-gray-700 list-disc list-inside">
                    <li>Navegador web actualizado (Chrome, Firefox, Edge).</li>
                    <li>Conexión a internet o a la red local donde esté instalado el sistema.</li>
                    <li>Un usuario y contraseña válidos para ingresar.</li>
                </ul>
                <p class="mt-3 text-gray-700">
                    Desde el punto de vista del servidor, SiGE está desarrollado en PHP + Laravel y utiliza
                    MySQL como base de datos, pero estos detalles son transparentes para el usuario final.
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    3. Inicio de Sesión
                </h2>
                <ol class="space-y-2 text-gray-700 list-decimal list-inside">
                    <li>Abra el navegador e ingrese a la dirección del sistema (por ejemplo, <span class="font-mono text-sm">http://localhost:8000</span>).</li>
                    <li>En la pantalla de inicio, escriba su <strong>email</strong> y su <strong>contraseña</strong> en los campos correspondientes.</li>
                    <li>Presione el botón <span class="font-semibold">"Iniciar sesión"</span>.</li>
                </ol>
                <p class="mt-3 text-gray-700">
                    Si los datos son correctos, el sistema lo redirigirá al <strong>Panel Principal</strong>.
                    Si hay algún error, se mostrará un mensaje indicando qué ocurrió (por ejemplo,
                    credenciales incorrectas).
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    4. Panel navegacion
                </h2>
                <p class="leading-relaxed text-gray-700">
                    Luego de iniciar sesión, se muestra el Panel navegacion. Desde allí se
                    puede navegar a las diferentes secciones del sistema mediante el menú superior:
                </p>
                <ul class="mt-2 space-y-1 text-gray-700 list-disc list-inside">
                    <li><strong>Docentes:</strong> gestión completa de los docentes registrados.</li>
                    <li><strong>Usuarios:</strong> sección disponible solo para Administradores.</li>
                    <li><strong>Perfil:</strong> permite cambiar la contraseña del usuario actual.</li>
                    <li><strong>Cerrar sesión:</strong> sale del sistema de forma segura.</li>
                </ul>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    5. Gestión de Docentes
                </h2>

                <h3 class="mt-2 mb-1 text-lg font-semibold text-gray-900">
                    5.1 Crear un docente
                </h3>
                <ol class="space-y-1 text-gray-700 list-decimal list-inside">
                    <li>Ir al menú <strong>Docentes</strong>.</li>
                    <li>Presionar el botón <strong>"Nuevo docente"</strong>.</li>
                    <li>Completar todos los campos obligatorios del formulario.</li>
                    <li>Presionar <strong>"Guardar"</strong>.</li>
                </ol>

                <h3 class="mt-4 mb-1 text-lg font-semibold text-gray-900">
                    5.2 Buscar docente
                </h3>
                <p class="text-gray-700">
                    En la parte superior del listado de docentes suele haber una barra de búsqueda.
                    Puede escribir el <strong>apellido</strong> o el <strong>DNI</strong> del docente y presionar
                    el botón de búsqueda para filtrar los resultados.
                </p>

                <h3 class="mt-4 mb-1 text-lg font-semibold text-gray-900">
                    5.3 Editar docente
                </h3>
                <p class="text-gray-700">
                    Desde el listado, seleccione la fila del docente que quiera modificar y haga clic en
                    el botón <strong>"Editar"</strong>. Se abrirá un formulario con los datos actuales para que
                    pueda ajustarlos. Una vez realizado el cambio, presione <strong>"Guardar"</strong>.
                </p>

                <h3 class="mt-4 mb-1 text-lg font-semibold text-gray-900">
                    5.4 Eliminar docente
                </h3>
                <p class="text-gray-700">
                    En el listado de docentes, el botón <strong>"Eliminar"</strong> permite borrar un docente del
                    sistema. Antes de hacerlo, se muestra un mensaje de confirmación. Tenga en cuenta
                    que esta acción es <strong>irreversible</strong>.
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    6. Gestión de Materias
                </h2>
                <p class="mb-3 text-gray-700">
                    Cada docente puede tener asociadas una o varias materias. Desde la vista de detalle
                    de un docente, o desde el módulo de materias, se pueden realizar las siguientes acciones:
                </p>
                <ul class="space-y-1 text-gray-700 list-disc list-inside">
                    <li><strong>Agregar materia:</strong> completar los campos Materia, Curso, División, Día y Horarios.</li>
                    <li><strong>Eliminar materia:</strong> quitar una materia asociada al docente.</li>
                </ul>
                <p class="mt-3 text-gray-700">
                    Es importante completar correctamente los horarios de inicio y fin para evitar solapamientos.
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    7. Gestión de Usuarios
                </h2>
                <p class="text-gray-700">
                    La gestión de usuarios está reservada para el rol <strong>Administrador</strong>. Desde esta
                    sección se puede:
                </p>
                <ul class="mt-2 space-y-1 text-gray-700 list-disc list-inside">
                    <li>Crear nuevos usuarios Estándar.</li>
                    <li>Editar nombre y email de los usuarios.</li>
                    <li>Reiniciar o cambiar la contraseña de un usuario.</li>
                </ul>
                <p class="mt-3 text-gray-700">
                    El usuario Estándar solo cuenta con permisos de lectura sobre la información de docentes
                    y materias, además de la posibilidad de cambiar su propia contraseña.
                </p>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    8. Recuperación de Contraseña
                </h2>
                <p class="text-gray-700">
                    Si un usuario olvida su contraseña, el sistema ofrece un mecanismo de recuperación,
                    el cual puede ser mediante correo electrónico u otro método definido.
                </p>
                <ol class="mt-2 space-y-1 text-gray-700 list-decimal list-inside">
                    <li>Ir al enlace <strong>"¿Olvidaste tu contraseña?"</strong> en la pantalla de inicio de sesión.</li>
                    <li>Ingresar el email asociado a la cuenta.</li>
                    <li>Seguir las instrucciones que el sistema indique (por ejemplo, revisar el correo electrónico).</li>
                </ol>
            </section>

            <section class="p-6 bg-white border border-gray-100 shadow rounded-2xl">
                <h2 class="mb-3 text-2xl font-semibold text-gray-900">
                    9. Seguridad del Sistema
                </h2>
                <p class="text-gray-700">
                    SiGE implementa medidas básicas de seguridad para proteger la información:
                </p>
                <ul class="mt-2 space-y-1 text-gray-700 list-disc list-inside">
                    <li>Contraseñas almacenadas de forma encriptada (no se guardan en texto plano).</li>
                    <li>Sesiones protegidas mediante el sistema de autenticación de Laravel.</li>
                    <li>Protección contra ataques CSRF en formularios.</li>
                    <li>Separación de permisos según el tipo de usuario (Administrador / Estándar).</li>
                </ul>
            </section>

        </div>
    </div>
@endsection
