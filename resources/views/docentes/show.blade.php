@extends('layouts.app')

@section('content')
<div class="w-10/12 mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold text-white">Detalle del docente</h2>
        <a href="{{ route('docentes.index') }}"
           class="px-4 py-2 text-sm font-semibold text-white rounded bg-slate-600 hover:bg-slate-700">
           ← Volver
        </a>
    </div>

    <div class="p-6 mb-6 bg-white rounded shadow">
        <h3 class="mb-2 text-lg font-semibold text-slate-800">
            {{ $teacher->last_name }}, {{ $teacher->name }}
        </h3>

        <div class="grid grid-cols-1 gap-2 text-sm md:grid-cols-2">
            <p><span class="font-semibold text-slate-700">DNI:</span> {{ $teacher->dni }}</p>
            <p><span class="font-semibold text-slate-700">Teléfono:</span> {{ $teacher->phone ?? '—' }}</p>
            <p><span class="font-semibold text-slate-700">Mail ABC:</span> {{ $teacher->email_abc ?? '—' }}</p>
            <p><span class="font-semibold text-slate-700">Dirección:</span> {{ $teacher->address ?? '—' }}</p>
            <p><span class="font-semibold text-slate-700">CUIL:</span> {{ $teacher->cuil ?? '—' }}</p>
            <p><span class="font-semibold text-slate-700">Código Postal:</span> {{ $teacher->zip_code ?? '—' }}</p>
            <p><span class="font-semibold text-slate-700">Fecha de nacimiento:</span>
                {{ optional($teacher->birthdate)->format('d/m/Y') ?? '—' }}
            </p>
            <p><span class="font-semibold text-slate-700">Fecha de alta:</span>
                {{ optional($teacher->created_at)->format('d/m/Y') }}
            </p>
        </div>
    </div>

    <div class="p-6 bg-white rounded shadow">
        <div class="flex items-center justify-between mb-4">
            <h4 class="text-lg font-semibold text-slate-800">Materias dictadas</h4>
            {{--
            <a href="{{ route('docentes.materias', $teacher) }}"
               class="px-3 py-1 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-700">
               Administrar materias
            </a>
            --}}
        </div>

        {{-- Lista de materias (cuando esté implementado) --}}
        <ul class="divide-y divide-slate-200">
            {{--
            @forelse($teacher->materias as $materia)
                <li class="py-2 text-sm text-slate-700">
                    {{ $materia->nombre }} —
                    {{ $materia->curso }}° {{ $materia->division }} —
                    {{ $materia->dia }} {{ $materia->horario }}
                </li>
            @empty
                <li class="py-4 text-center text-slate-500">No tiene materias cargadas.</li>
            @endforelse
            --}}
            <li class="py-4 text-center text-slate-500">No tiene materias cargadas.</li>
        </ul>
    </div>
</div>
@endsection
