<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function exists(string $email): bool {
        return (bool)parent::where('email', '=', $email)->first();
    }

    public static function findEmail(string $email): User {
        return parent::where('email', '=', $email)->first();
    }

    public function teams() {
        return $this->belongsToMany(Team::class, 'user_team', 'user_id', 'team_id');
    }

    public function defaultTeam() {
        return UserTeam::where('user_id', '=', Auth::user()->id)->first();
    }

    public function addToTeam(int $team) {
        $user_team = new UserTeam();

        $user_team->fill(['user_id' => $this->id, 'team_id' => $team]);
        $user_team->save();
    }
}
