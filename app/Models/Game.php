<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    
    protected $primaryKey = 'game_id';
    protected $fillable = ['name','description','price','discount','release_at','category_fk','gamemode_fk', 'cover', 'logo'];

    
}
