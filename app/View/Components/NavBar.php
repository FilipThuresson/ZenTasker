<?php

namespace App\View\Components;

use App\Models\ActiveTeam;
use App\Models\Team;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NavBar extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $active_team = Team::find(ActiveTeam::find(Auth::user()->id)->team_id);
        return view('components.nav-bar', compact('active_team'));
    }
}
