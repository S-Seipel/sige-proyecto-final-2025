@extends('layouts.app')

@section('content')

<div>
    <h2 class="mb-6 text-2xl font-semibold text-slate-50">
        Recuperar contraseña
    </h2>

    <div class="max-w-md p-6 mx-auto bg-white border shadow-md rounded-xl border-slate-200">

        <h1 class="mb-4 text-xl font-semibold text-slate-800">
            ¿Olvidaste tu contraseña?
        </h1>

        @if (session('status'))
            <div class="px-3 py-2 mb-4 text-sm font-medium text-green-600 bg-green-100 border border-green-300 rounded-lg">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="px-3 py-2 mb-4 text-sm font-medium text-red-600 bg-red-100 border border-red-300 rounded-lg">
                {{ $errors->first('email') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    Correo electrónico
                </label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full px-3 py-2 text-sm border rounded-lg border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            {{-- Botón --}}
            <button
                type="submit"
                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-semibold text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700"
            >
                Enviar enlace de restablecimiento
            </button>
        </form>

    </div>
</div>

@endsection
