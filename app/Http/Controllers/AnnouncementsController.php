<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
     public function index(){

        $announcements = Announcement::all();

       

        return view('announcements.index',[

                'announcements' => $announcements
        ]);

    }

    public function view(int $id)
        {
            
            return view('announcements.view', [

                'announcement' => Announcement::findOrFail($id)
            ]);
        }

    public function create()
        {
            
            return view('announcements.create');
        }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|min:2',
            'subtitle'      => 'required|min:2',
            'description'   => 'required|max:3000',
            'author'        => 'required|min:2',
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

        Announcement::create($input);

        return redirect()->route('admin.announcements')->with([
            'feedback.message' => 'La noticia <b>' . e($request->title) . '</b> fue <b>publicada</b> exitosamente',
            'feedback.type' => 'success'
        ]);
    }

        public function destroy(int $id){
            
            $announcement = Announcement::findOrFail($id);
            
            $announcement->delete($id);


            return redirect()
            ->route('admin.announcements')
            ->with([
                'feedback.message' => 'La noticia <b>' . e($announcement->title) . '</b> fue <b>eliminada</b> exitosamente',
                'feedback.type' => 'danger' // success, error, warning, info
            ]);

        }
        
        public function delete(int $id)
        {
            
            return view('announcements.delete', [

                'announcement' => Announcement::findOrFail($id)
            ]);
        }

        public function edit(int $id)
        {
            
            return view('announcements.edit', [

                'announcement' => Announcement::findOrFail($id)
            ]);
        }

       public function update(Request $request, int $id)
        {
            
            
            $request->validate([
                'title'         => 'required|min:2',
                'subtitle'      => 'required|min:2',
                'description'   => 'required|max:3000',
                'author'        => 'required|min:2'
            ],[
                'title.required'=>'El titulo debe tener un valor',
                'title.min'=>'El titulo debe tener al menos :min caracteres',
                
                'subtitle.required'=>'El subtitulo debe tener un valor',
                'subtitle.min'=>'El subtitulo debe tener al menos :min caracteres',
                
                'description.required'=>'La descripcion debe tener un valor',
                'description.max'=>'La descripcion debe tener :max caracteres como mucho', // Corregido
                
                'author.required'=>'Debe ingresar el autor',
                'author.min'=>'El autor debe tener al menos :min caracteres',
            ]);

            $announcement = Announcement::findOrFail($id);
            
            $input = $request->except('_token', '_method', 'cover');
            $oldCover = $announcement->cover;
            
            if ($request->hasFile('cover')) {
                $input['cover'] = $request->file('cover')->store('covers', 'public');
                
                // Eliminar la imagen anterior si existe
                if ($oldCover && Storage::disk('public')->exists($oldCover)) {
                    Storage::disk('public')->delete($oldCover);
                }
            }
            
            $announcement->update($input);
            
        return redirect()
            ->route('admin.announcements')
            ->with([
                'feedback.message' => 'La noticia <b>' . e($announcement->title) . '</b> fue <b>actualizada</b> exitosamente',
                'feedback.type' => 'info'
            ]);
        }
}
