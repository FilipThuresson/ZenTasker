<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    public static function SuperAdmin()
    {
        return (self::where('code', '=', 'superadmin')->get('id'))[0]->id;
    }
}
