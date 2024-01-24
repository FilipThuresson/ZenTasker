<?php

namespace App\Services;


use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\UserTeamRole;
use Illuminate\Support\Facades\Auth;

class TeamService
{
    /*
     *  Sets the user who created the team as super admin of the team
     */
    public function setCreatorAsAdmin($team): bool
    {
        $utr = new UserTeamRole();
        $utr->user_id = Auth::user()->id;
        $utr->team_id = $team->id;
        $utr->role_id = Role::SuperAdmin();
        return $utr->save();
    }

    /*
     *  Adds every user to the team
     */
    public function createTeam($validated) {
        $team = new Team();
        $team->fill($validated);
        $team->user_id = Auth::user()->id;
        $team->save();
        Auth::user()->addToTeam($team->id);

        $user_emails = explode(',', $validated['users']);
        foreach ($user_emails as $email) {
            if (User::exists($email)) {
                $user = User::findEmail($email);
                $user->addToTeam($team->id);
            }
        }
        $this->setCreatorAsAdmin($team);
    }
}
