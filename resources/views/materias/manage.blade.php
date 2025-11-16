@extends('layouts.app')

@section('content')

<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-semibold text-slate-50">
            Materias de {{ $teacher->last_name }}, {{ $teacher->name }}
        </h2>

        <a href="{{ route('docentes.show', $teacher) }}"
           class="inline-flex items-center px-4 py-2 text-sm rounded-lg bg-slate-700 hover:bg-slate-600 text-slate-100">
            ← Volver
        </a>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

        {{-- Card: agregar materia --}}
        <div class="p-6 bg-white border shadow-md rounded-xl border-slate-200/70">
            <h3 class="mb-4 text-lg font-semibold text-slate-800">
                Agregar materia
            </h3>

            <form action="{{ route('materias.store', $teacher) }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 text-sm font-medium text-slate-700">
                        Materia <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="subject" required
                           class="w-full px-3 py-2 text-sm bg-white border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-slate-700">
                        Curso <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="course" required
                           class="w-full px-3 py-2 text-sm bg-white border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-slate-700">
                        División <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="division" required
                           class="w-full px-3 py-2 text-sm bg-white border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Día que dicta la materia</label>
                    <select name="day" id="day" class="w-full px-3 py-2 border rounded form-select focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" hidden>Seleccionar día...</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Inicio</label>
                    <input type="time" name="start_time"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Horario</label>
                    <input type="time" name="end_time"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <button
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700">
                    Agregar
                </button>
            </form>
        </div>

        {{-- Card: materias cargadas --}}
        <div class="p-6 bg-white border shadow-md rounded-xl border-slate-200/70">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-slate-800">
                    Materias dictadas
                </h3>
            </div>

            @if($teacher)
                @forelse($teacher->subjects as $subject)
                    <div class="flex items-center justify-between gap-4 py-2 border-b border-slate-200/70 last:border-b-0">
                        <span class="text-sm text-slate-800">
                            <span class="font-semibold">{{ $subject->subject }}</span>
                            — {{ $subject->course }}° {{ $subject->division }}
                            — {{ $subject->day }}
                            — {{ $subject->start_time }}/{{ $subject->end_time }}
                        </span>

                        <form action="{{ route('materias.destroy', $subject) }}" method="POST"
                              onsubmit="return confirm('¿Eliminar esta materia?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-2 py-1 text-xs font-semibold text-red-500 transition border border-red-500 rounded-md hover:bg-red-500 hover:text-white">
                                X
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        No hay materias.
                    </p>
                @endforelse
            @endif
        </div>

    </div>
</div>
@endsection
