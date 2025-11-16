@extends('layouts.app')

@section('content')
<div class="w-full mx-auto">
    <h2 class="my-6 text-xl font-semibold text-white">Nuevo docente</h2>

    <form action="{{ route('docentes.store') }}" method="POST" class="pb-1 bg-white rounded shadow">
        @csrf

        <div class="grid grid-cols-1 gap-6 p-6 lg:grid-cols-3 xl:grid-cols-4">

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Apellido <span class="text-red-500">*</span></label>
                <input type="text" name="lastName" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Nombre <span class="text-red-500">*</span></label>
                <input type="text" name="name" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">DNI <span class="text-red-500">*</span></label>
                <input type="text" name="dni" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Edad</label>
                <input type="number" name="years"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                <input type="date" name="birthdate"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">CUIL</label>
                <input type="text" name="cuil"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Código postal</label>
                <input type="text" name="zipCode"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1 text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" name="address"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" name="phone"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Mail ABC</label>
                <input type="email" name="mailAbc"
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="flex items-center justify-between m-6">
            <a href="{{ route('docentes.index') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900">
                ← Volver
            </a>

            <button type="submit"
                class="px-5 py-2 text-sm font-semibold text-white bg-green-600 rounded hover:bg-green-700 focus:ring-2 focus:ring-green-400">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection
