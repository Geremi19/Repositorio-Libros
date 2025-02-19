<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

class LoginController extends Controller
{
    // Muestra el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Lógica de autenticación
    public function login(Request $request)
    {
        // Valida que se hayan enviado los campos requeridos
        $request->validate([
            'user_name' => 'required|string',
            'user_pass' => 'required|string',
        ]);

        $credentials = $request->only('user_name', 'user_pass');

        // Busca el usuario por nombre de usuario
        $user = Usuarios::where('user_name', $credentials['user_name'])->first();

        if ($user) {
            $hashedPassword = $user->user_pass;

            // Verifica si la contraseña almacenada está hasheada con Bcrypt
            if (password_get_info($hashedPassword)['algoName'] === 'bcrypt') {
                // Compara la contraseña ingresada con la hasheada
                if (Hash::check($credentials['user_pass'], $hashedPassword)) {
                    Auth::guard('usuarios')->login($user);
                    return redirect()->intended('/libros/inicio');
                }
            } else {
                // Contraseña en texto plano, compara directamente
                if ($credentials['user_pass'] === $hashedPassword) {
                    // Hashea y guarda la contraseña
                    $user->user_pass = Hash::make($credentials['user_pass']);
                    $user->save();

                    Auth::guard('usuarios')->login($user);
                    return redirect()->intended('/libros/inicio');
                }
            }
        }

        // Si las credenciales no coinciden
        return back()->withErrors([
            'user_name' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Lógica de cierre de sesión
    public function logout(Request $request)
    {
        Auth::guard('usuarios')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
