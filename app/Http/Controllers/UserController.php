<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

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
                'password'  => 'required|min:4|max:32|confirmed',
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
            
            // Crear usuario
            User::create($input);
            
            return redirect()
                ->route('admin.users')
                ->with('feedback.message', 'El usuario <b>' . e($request->name) . '</b> fue <b>creado</b> exitosamente');
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
            ->with('feedback.message' , 'La noticia <b>'. e($user->name) .'</b> fue <b>eliminada</b> exitosamente');

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
                'name'         =>'required|min:2',
                'email'      =>'required|email|min:8',
            ],[
                'name.required' => 'El nombre debe tener un valor',
                'name.min' => 'El nombre debe tener al menos :min caracteres',
                
                'email.required' => 'El email debe tener un valor',
                'email.email' => 'El email debe tener un formato válido',
                'email.unique' => 'Este email ya está registrado'
            ]);

            $user->update($request->all());
            
            return redirect()
            ->route('admin.users')
            ->with('feedback.message' , 'El usuario <b>'. e($request->title).'</b> fue <b>actualizo</b> exitosamente');
        }
}
