@extends('layouts.app')

@section('content')
<div class="w-full mx-auto">
    <h2 class="mb-6 text-xl font-semibold text-white">Editar docente</h2>

    <form action="{{ route('docentes.update', $teacher->id) }}" method="POST" class="p-6 bg-white rounded shadow">
        @csrf
        @method('PATCH')

        <div class="grid grid-cols-1 gap-6 p-6 lg:grid-cols-3 xl:grid-cols-4">

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Apellido <span class="text-red-500">*</span></label>
                <input type="text" name="lastName" required value="{{ $teacher->last_name }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Nombre <span class="text-red-500">*</span></label>
                <input type="text" name="name" required value="{{ $teacher->name }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">DNI <span class="text-red-500">*</span></label>
                <input type="text" name="dni" required value="{{ $teacher->dni }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Edad</label>
                <input type="number" name="years" value="{{ $teacher->year_old }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                <input
                    type="date"
                    name="birthdate"
                    value="{{ old('birthdate', optional($teacher->birthdate)->format('Y-m-d')) }}"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">CUIL</label>
                <input type="text" name="cuil" value="{{ $teacher->cuil }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Código postal</label>
                <input type="text" name="zipCode" value="{{ $teacher->zip_code }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1 text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" name="address" value="{{ $teacher->address }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" name="phone" value="{{ $teacher->phone }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Mail ABC</label>
                <input type="email" name="mailAbc" value="{{ $teacher->email_abc }}"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('docentes.index') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900">
                ← Volver
            </a>

            <button type="submit"
                class="px-5 py-2 text-sm font-semibold text-white bg-green-600 rounded hover:bg-green-700 focus:ring-2 focus:ring-green-400">
                Actualizar
            </button>
        </div>
    </form>
</div>
@endsection
