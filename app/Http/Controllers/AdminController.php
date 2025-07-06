<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function users()
    {

        $users = User::all();

        return view('admin.users',[

                'users' => $users
        ]);     
    }

    public function announcements()
    {

        $announcements = Announcement::all();

        return view('admin.announcements',[

                'announcements' => $announcements
        ]);     
    }

    public function games()
    {

        $games = Game::all();

        return view('admin.games',[

                'games' => $games
        ]);     
    }
}
