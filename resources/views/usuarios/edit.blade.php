@extends('layouts.app')

@section('content')

    <div class="w-full">
        <h2 class="mb-6 text-2xl font-semibold text-slate-50">
            Editar usuario
        </h2>

        <form
            action="{{ route('users.update', $usuario) }}"
            method="POST"
            class="max-w-xl p-6 bg-white border shadow-md rounded-xl border-slate-200"
        >
            @csrf
            @method('PATCH')

            <div class="mb-5">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    Nombre
                </label>
                <input
                    type="text"
                    name="name"
                    value="{{ $usuario->name }}"
                    class="w-full px-3 py-2 text-sm border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <div class="mb-5">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    value="{{ $usuario->email }}"
                    class="w-full px-3 py-2 text-sm border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <div class="mb-5">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    Rol
                </label>
                <select
                    name="is_admin"
                    class="w-full px-3 py-2 text-sm border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
                    <option value="0" @selected(!$usuario->is_admin)>Estándar</option>
                    <option value="1" @selected($usuario->is_admin)>Administrador</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    Nueva contraseña (opcional)
                </label>
                <input
                    type="password"
                    name="password"
                    placeholder="Dejar vacío para no cambiar"
                    class="w-full px-3 py-2 text-sm border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <button
                class="px-5 py-2 text-sm font-semibold text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700">
                Guardar cambios
            </button>

        </form>
    </div>
@endsection
