@extends('layouts.app')

@section('content')
    <div class="w-full">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-white">Docentes</h2>
            <a href="{{ route('docentes.create') }}" class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
                + Nuevo docente
            </a>
        </div>

        <form method="GET" class="flex flex-col gap-2 mb-6 md:flex-row">
        <input
            type="text"
            name="last_name"
            value="{{ request('apellido') }}"
            placeholder="Buscar por apellido..."
            class="px-3 py-2 bg-white rounded md:w-1/3"
        >
        <input
            type="text"
            name="dni"
            value="{{ request('dni') }}"
            placeholder="Buscar por DNI..."
            class="px-3 py-2 bg-white rounded md:w-1/3"
        >
        <button class="px-4 py-2 text-sm font-semibold text-white rounded bg-slate-600 hover:bg-slate-700">
            Buscar
        </button>
    </form>

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-slate-100">
                    <tr>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">DNI</th>
                        <th class="px-4 py-2">Teléfono</th>
                        <th class="px-4 py-2">Mail ABC</th>
                        <th class="px-4 py-2 text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($teachers as $teacher)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $teacher->last_name }} {{ $teacher->name }}</td>
                        <td class="px-4 py-2">{{ $teacher->dni }}</td>
                        <td class="px-4 py-2">{{ $teacher->phone }}</td>
                        <td class="px-4 py-2">{{ $teacher->email_abc }}</td>
                        <td class="px-4 py-2 space-x-2 text-right">
                            <a href="{{ route('materias.manage', $teacher) }}" class="text-green-600 hover:underline">Materias</a>
                            <a href="{{ route('docentes.show', $teacher) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('docentes.edit', $teacher) }}" class="text-amber-600 hover:underline">Editar</a>
                            <form action="{{ route('docentes.delete', $teacher) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Seguro que querés eliminar este docente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-amber-800 hover:underline">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-slate-500">No hay docentes cargados.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
