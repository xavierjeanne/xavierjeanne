<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Skills\ManageSkill;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\Experiences\ManageExperience;
use App\Livewire\Formations\ManageFormation;
use App\Livewire\Realisations\ManageRealisation;

Route::get('/', function () {
    return view('welcome');
})->name('home');

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
