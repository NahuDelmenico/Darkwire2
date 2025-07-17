<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function view(int $id)
        {
            
            return view('user.view', [

                'user' => User::findOrFail($id)
            ]);
        }

    public function create()
        {
            
            return view('user.create');
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
                ->route('admin.users')
                ->with([
                'feedback.message' => 'El usuario <b>' . e($request->name) . '</b> fue <b>creado</b> exitosamente',
                'feedback.type' => 'success' // success, error, warning, info
            ]);
        }
        
        public function delete(int $id)
        {
            
            return view('user.delete', [

                'user' => User::findOrFail($id)
            ]);
        }

        public function destroy(int $id){
            
            $user = User::findOrFail($id);
            
            $user->delete($id);


        return redirect()
            ->route('admin.users')
            ->with([
                'feedback.message' => 'El usuario <b>' . e($user->name) . '</b> fue <b>eliminado</b> exitosamente',
                'feedback.type' => 'danger' // success, error, warning, info
            ]);

        }


        public function edit(int $id)
        {
            
            return view('user.edit', [

                'user' => User::findOrFail($id)
            ]);
        }

        public function update(Request $request, int $id)
        {
            $user = User::findOrFail($id);

            $request->validate([
                'name'     => 'required|min:2',
                'email'    => 'required|email|min:8|unique:users,email,' . $id,
                'password' => 'required|min:4|max:32'
            ],[
                'name.required' => 'El nombre debe tener un valor',
                'name.min' => 'El nombre debe tener al menos :min caracteres',
                
                'email.required' => 'El email debe tener un valor',
                'email.email' => 'El email debe tener un formato válido',
                'email.min' => 'El email debe tener al menos :min caracteres',
                'email.unique' => 'Este email ya está registrado',
                
                'password.required' => 'La contraseña debe tener un valor',
                'password.min' => 'La contraseña debe tener al menos :min caracteres',
                'password.max' => 'La contraseña no puede tener más de :max caracteres'
            ]);
            
            $input = $request->only('name','email');
            $input['password'] = Hash::make($request->password);

            $user->update($input);
            
            return redirect()
            ->route('admin.users')
            ->with([
                'feedback.message' => 'El usuario <b>' . e($request->title) . '</b> fue <b>actualizado</b> exitosamente',
                'feedback.type' => 'info' // success, error, warning, info
            ]);
        }
}
