@extends('layouts.app')

@section('content')

    <div class="w-full">
        <h2 class="mb-6 text-2xl font-semibold text-slate-50">
            Usuarios del sistema
        </h2>

        <div class="overflow-hidden bg-white border shadow-md dark:bg-slate-800 rounded-xl border-slate-200 dark:border-slate-700">

            <table class="w-full text-sm text-left">
                <thead class="bg-slate-100 dark:bg-slate-700/60 text-slate-700 dark:text-slate-300">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Nombre</th>
                        <th class="px-6 py-3 font-semibold">Email</th>
                        <th class="px-6 py-3 font-semibold">Rol</th>
                        @auth
                            @if (auth()->user()->is_admin)
                                <th class="px-6 py-3 font-semibold text-right">Acciones</th>
                            @endif
                        @endauth
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                @foreach($usuarios as $usuario)
                    <tr class="transition hover:bg-slate-50 dark:hover:bg-slate-700/40">
                        <td class="px-6 py-3 text-slate-800 dark:text-slate-200">
                            {{ $usuario->name }}
                        </td>

                        <td class="px-6 py-3 text-slate-800 dark:text-slate-200">
                            {{ $usuario->email }}
                        </td>

                        <td class="px-6 py-3">
                            <span
                                class="inline-block px-2 py-1 text-xs font-semibold rounded-md
                                    {{ $usuario->is_admin
                                            ? 'bg-indigo-100 text-indigo-700 dark:bg-indigo-800/40 dark:text-indigo-300'
                                            : 'bg-slate-200 text-slate-700 dark:bg-slate-700/50 dark:text-slate-300' }}">
                                {{ $usuario->is_admin ? 'Administrador' : 'Estándar' }}
                            </span>
                        </td>
                        @auth
                            @if (auth()->user()->is_admin)
                                <td class="px-6 py-3 text-right">
                                    <a href="{{ route('users.edit', $usuario) }}"
                                    class="inline-flex items-center px-3 py-1.5 text-sm font-semibold
                                            rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition">
                                        Editar
                                    </a>
                                </td>
                            @endif
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
