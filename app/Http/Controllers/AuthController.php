<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        //TODO: Valirdar 

        $credentials = $request->only(['email','password']);

        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()
            ->intended(route('welcome'))
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
