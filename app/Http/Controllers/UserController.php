<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
        {
            
            return view('user.create');
        }

    public function store(Request $request)
        {
            
            $request->validate([
                'title'         =>'required|min:2',
                'subtitle'      =>'required|min:2',
                'description'   =>'required|max:3000',
                'author'        =>'required|min:2'
            ],[
                'title.required'=>'El titulo debe tener un valor',
                'title.min'=>'El titulo debe tener al menos :min caracteres',
                
                'subtitle.required'=>'El subtitulo debe tener un valor',
                'subtitle.min'=>'El subtitulo debe tener al menos :min caracteres',
                
                'description.required'=>'La descripcion debe tener un valor',
                'title.max'=>'La descripcion debe tener :max caracteres como mucho',

                'author.required'=>'Debe ingresar el autor',
                'author.min'=>'El autor debe tener al menos :min caracteres',

            ]);
            $input = $request->all();
            if ($request->hasFile('cover')) {
                $input['file'] = $request->file('cover')->store('covers', 'public');
            }

            User::create($request->all());

            
            return redirect()
            ->route('announcements.index')
            ->with('feedback.message' , 'La noticia <b>'. e($request->title).'</b> fue <b>publicada</b> exitosamente');
        }

        public function destroy(int $id){
            
            $announcement = User::findOrFail($id);
            
            $announcement->delete($id);


            return redirect()
            ->route('announcements.index')
            ->with('feedback.message' , 'La noticia <b>'. e($announcement->title) .'</b> fue <b>eliminada</b> exitosamente');

        }
        
        public function delete(int $id)
        {
            
            return view('announcements.delete', [

                'announcement' => User::findOrFail($id)
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
            $announcement = Announcement::findOrFail($id);

            $request->validate([
                'title'         =>'required|min:2',
                'subtitle'      =>'required|min:2',
                'description'   =>'required|max:3000',
                'author'        =>'required|min:2'
            ],[
                'title.required'=>'El titulo debe tener un valor',
                'title.min'=>'El titulo debe tener al menos :min caracteres',
                
                'subtitle.required'=>'El subtitulo debe tener un valor',
                'subtitle.min'=>'El subtitulo debe tener al menos :min caracteres',
                
                'description.required'=>'La descripcion debe tener un valor',
                'title.max'=>'La descripcion debe tener :max caracteres como mucho',

                'author.required'=>'Debe ingresar el autor',
                'author.min'=>'El autor debe tener al menos :min caracteres',

            ]);

            $announcement->update($request->all());

            
            
            return redirect()
            ->route('announcements.index')
            ->with('feedback.message' , 'La noticia <b>'. e($request->title).'</b> fue <b>actualizo</b> exitosamente');
        }
}
