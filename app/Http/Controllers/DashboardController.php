<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function members() {
        $members = Auth::user()->activeTeam->members;
        return view('dashboard.members', ['members' => $members]);
    }
}
