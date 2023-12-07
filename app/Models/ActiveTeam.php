<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveTeam extends Model
{
    use HasFactory;


    protected $table = 'active_team';

    public static function find($user_id) {
        return parent::where('user_id', '=', $user_id)->first();
    }
}
