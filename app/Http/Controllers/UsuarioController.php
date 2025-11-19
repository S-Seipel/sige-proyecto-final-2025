<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id) {
        $usuario = User::findOrFail($id);

        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'is_admin'  => 'required|integer',
            'password'  => 'nullable|string|min:8',
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $usuario->update($data);

        return redirect()->route('users.index');
    }
}
