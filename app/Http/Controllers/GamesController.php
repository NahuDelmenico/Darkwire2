<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function view(int $id){

         return view('games.view', [

                'game' => Game::findOrFail($id)
            ]);

    }

     public function index()
    {
        $games = Game::all();

       

        return view('games.index',[

                'games' => $games
        ]);     
    }



 
}
