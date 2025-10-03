<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Formation;
use App\Models\Realisation; 
use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $experiences = Experience::orderBy('date_debut', 'desc')->get();
        $formations = Formation::orderBy('date', 'desc')->get();
        $skills = Skill::all();
        $realisations = Realisation::all();
        $user = User::first();
        return view('welcome', compact('experiences', 'formations', 'skills', 'realisations', 'user'));
    }
}