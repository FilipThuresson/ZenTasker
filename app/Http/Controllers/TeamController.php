<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\UserTeamRole;
use App\Services\TeamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{

    public function __construct (
        protected TeamService $services
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Auth::user()->teams;
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $validated = $request->validated();
        $this->services->createTeam($validated);
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }

    public function active(Request $request) {
        $user = Auth::user();
        $user->current_team = $request->post('new_team');
        $user->save();
        return back();
    }
}
