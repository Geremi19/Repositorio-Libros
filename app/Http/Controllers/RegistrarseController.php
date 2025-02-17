<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuarios;

class RegistrarseController extends Controller
{
    public function registrarse(){
        $user = auth()->guard('usuarios')->user();
        return view('libros.registrarse',compact('user'));
    }

    public function registrar(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|unique:usuarios,user_name',
            'user_pass' => 'required|min:3|confirmed', // Validación para confirmar la contraseña
            'user_tipo' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new Usuarios();
        $user->user_name = $request->user_name;
        $user->user_pass = Hash::make($request->user_pass);
        $user->user_tipo = $request->user_tipo;

        $user->save();

        return redirect()->back()->with('success', 'Usuario registrado correctamente');
    }
}
