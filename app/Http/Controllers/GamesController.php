<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Gamemode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GamesController extends Controller
{
     public function index()
        {
            $games = Game::all();

        

            return view('games.index',[

                    'games' => $games
            ]);     
        }
    
    public function view(int $id)
        {

            return view('games.view', [

                    'game' => Game::findOrFail($id)
                ]);

        }



    public function create()
    {
        $gamemodes = Gamemode::all();
        $categories = Category::all();

        return view('games.create',[
            'gamemodes'=> $gamemodes,
            'categories' => $categories

        ]);


    }

    public function store(Request $request)
        {
            
            $request->validate([
                'name'         =>'required|min:2',
                'description'      =>'required|min:2',
                'price'   =>'required|max:3000',
                
                'release_at' => 'required',
                'gamemode_fk' => 'required',
                'category_fk'        =>'required',
            ],[
                'name.required'=>'El nombre debe tener un valor',
                'name.min'=>'El nombre debe tener al menos :min caracteres',
                
                'description.required'=>'La descripcion debe tener un valor',
                'title.max'=>'La descripcion debe tener :max caracteres como mucho',

                'price.required'=>'Debe ingresar el precio',

                

                'gamemode_fk.required'=>'Debe ingresar el modo de juego',

                'category_fk.required'=>'Debe ingresar la categoria',

                'release_at.required'=>'Debe ingresar la fecha'
                

            ]);
            
            $input = $request->all();
            if ($request->hasFile('cover')) {
                $input['cover'] = $request->file('cover')->store('covers', 'public');
            }

            if ($request->hasFile('logo')) {
                $input['logo'] = $request->file('logo')->store('logos', 'public');
            }

            Game::create($input);

            
            return redirect()
            ->route('admin.games')
            ->with([
                'feedback.message' => 'El juego <b>' . e($request->name) . '</b> fue <b>creado</b> exitosamente',
                'feedback.type' => 'success' // success, error, warning, info
            ]);
        }

        public function destroy(int $id){
            
            $game = Game::findOrFail($id);
            
            $game->delete($id);


            return redirect()
            ->route('admin.games')
            ->with([
                'feedback.message' => 'El juego <b>' . e($game->name) . '</b> fue <b>eliminado</b> exitosamente',
                'feedback.type' => 'danger' // success, error, warning, info
            ]);

        }

        public function delete(int $id)
        {
            
            return view('games.delete', [

                'game' => Game::findOrFail($id)
            ]);
        }

        public function edit(int $id)
        {
            $categories = Category::all();
            $gamemodes = Gamemode::all();

            return view('games.edit', [
                'categories' => $categories,
                'gamemodes' => $gamemodes,
                'game' => Game::findOrFail($id)
            ]);
        }

        public function update(Request $request, int $id)
        {
            

            $request->validate([
                'name'         =>'required|min:2',
                'description'      =>'required|min:2',
                'price'   =>'required|max:3000',
                
                'release_at' => 'required',
                'gamemode_fk' => 'required',
                'category_fk'        =>'required',
            ],[
                'name.required'=>'El nombre debe tener un valor',
                'name.min'=>'El nombre debe tener al menos :min caracteres',
                
                'description.required'=>'La descripcion debe tener un valor',
                'title.max'=>'La descripcion debe tener :max caracteres como mucho',

                'price.required'=>'Debe ingresar el precio',

                

                'category_fk.required'=>'Debe ingresar el modo de juego',

                'category_fk.required'=>'Debe ingresar la categoria',

                'release_at.required'=>'Debe ingresar la fecha'
                

            ]);
            $game = Game::findOrFail($id);  

            $input = $request->except('_token', '_method', 'cover', 'logo');
            $oldCover = $game->cover;

            if ($request->hasFile('cover')) {
                $input['cover'] = $request->file('cover')->store('covers', 'public');
            
                if ($oldCover && Storage::disk('public')->exists($oldCover)) {
                    Storage::disk('public')->delete($oldCover);
                }

            }

            $oldLogo = $game->logo;
            if ($request->hasFile('logo')) {
                $input['logo'] = $request->file('logo')->store('covers', 'public');
            
                if ($oldLogo && Storage::disk('public')->exists($oldLogo)) {
                    Storage::disk('public')->delete($oldLogo);
                }

            }

            $game->update($input);
            
            return redirect()
            ->route('admin.games')
            ->with([
                'feedback.message' => 'El juego <b>' . e($game->name) . '</b> fue <b>actualizado</b> exitosamente',
                'feedback.type' => 'info' // success, error, warning, info
            ]);
        }
}
