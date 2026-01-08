<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Skills\ManageSkill;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Formations\ManageFormation;
use App\Livewire\Experiences\ManageExperience;
use App\Livewire\Realisations\ManageRealisation;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/old', function() {
    $experiences = \App\Models\Experience::orderBy('date_debut', 'desc')->get();
    $formations = \App\Models\Formation::orderBy('date', 'desc')->get();
    $skills = \App\Models\Skill::all();
    $realisations = \App\Models\Realisation::with('skills')->get();
    $user = \App\Models\User::first();
    return view('welcome', compact('experiences', 'formations', 'skills', 'realisations', 'user'));
})->name('old');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('formations', ManageFormation::class)->name('formations');
    Route::get('experiences', ManageExperience::class)->name('experiences');
    Route::get('skills', ManageSkill::class)->name('skills');
    Route::get('realisations', ManageRealisation::class)->name('realisations');
});

require __DIR__.'/auth.php';
