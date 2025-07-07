<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        //TODO: Valirdar 

        $credentials = $request->only(['email','password']);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()
            ->intended(route('home'))
            ->with(['feedback.message' => 'Sesion Iniciada con exito',
                    'feedback.type' => 'success'
            ]);
        }

        return redirect()
            ->back()
            ->withInput()
            ->with(['feedback.message' => 'Credenciales Incorrectas',
                    'feedback.type' => 'danger'
            ]);
    
        
    }

    public function store(Request $request)
        {
            $request->validate([
                'name'      => 'required|min:2|max:255',
                'email'     => 'required|email|unique:users,email',
                'password'  => 'required|min:4|max:32|confirmed'
            ], [
                'name.required' => 'El nombre debe tener un valor',
                'name.min' => 'El nombre debe tener al menos :min caracteres',
                'name.max' => 'El nombre debe tener máximo :max caracteres',
                
                'email.required' => 'El email debe tener un valor',
                'email.email' => 'El email debe tener un formato válido',
                'email.unique' => 'Este email ya está registrado',
                
                'password.required' => 'La contraseña debe tener un valor',
                'password.min' => 'La contraseña debe tener al menos :min caracteres',
                'password.max' => 'La contraseña debe tener máximo :max caracteres',
                'password.confirmed' => 'Las contraseñas no coinciden'
            ]);
            
            // Preparar datos para crear el usuario
            $input = $request->all();
            
            // Encriptar contraseña
            $input['password'] = Hash::make($request->password);

            // Crear rol
            $input['rol'] = 'Usuario';
            
            // Crear usuario
            User::create($input);
            
            return redirect()
                ->route('auth.login')
                ->with([
                'feedback.message' => 'El usuario ' . e($request->name) . ' fue creado exitosamente',
                'feedback.type' => 'success' // success, error, warning, info
            ]);
        }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login')
            ->with('feedback.message', 'Sesion Cerrada Correctamente');
            
    }

}
