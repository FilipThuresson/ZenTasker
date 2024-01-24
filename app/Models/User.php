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

    public function activeTeam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Team::class, 'current_team');
        /*
        return Team::find($this->current_team);
    */}

    public function addToTeam(int $team) {
        $user_team = new UserTeam();

        $user_team->fill(['user_id' => $this->id, 'team_id' => $team]);
        $user_team->save();
    }

    public function role(string $code): bool
    {
        $roles = $this->roles();
        foreach ($roles as $role) {
            $role = Role::find($role->role_id);
            if($role->code == $code || $role->code == "superadmin"){
                return true;
            }
        }

        return false;
    }

    public function roles() {
        return UserTeamRole::where([
            ['user_id', '=', $this->id],
            ['team_id', '=', $this->current_team]
        ])->get();
    }
}
