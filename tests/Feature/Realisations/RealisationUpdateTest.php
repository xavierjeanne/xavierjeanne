<?php

use App\Livewire\Realisations\ListRealisation;
use App\Livewire\Realisations\ManageRealisation;
use App\Models\Realisation;
use App\Models\User;
use App\Models\Skill;
use Livewire\Livewire;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('realisation list can be rendered', function () {
    $user = User::factory()->create();
    
    $response = $this->actingAs($user)->get('/realisations');
    
    $response->assertStatus(200);
});

test('user can view their realisations', function () {
    $user = User::factory()->create();
    $realisation = Realisation::factory()->create([
        'user_id' => $user->id,
        'title' => 'Test Title',
        'description' => 'Test description content'
    ]);
    
    Livewire::actingAs($user)
        ->test(ListRealisation::class)
        ->assertSee('Test Title')
        ->assertSee('Test description content');
});

test('user can create a new realisation', function () {
    $user = User::factory()->create();
    $skill = Skill::factory()->create();
    
    Livewire::actingAs($user)
        ->test(ManageRealisation::class)
        ->call('create')
        ->set('title', 'New Realisation')
        ->set('type', 'type')
        ->set('link', 'http://url.fr')
        ->set('description', 'Test description')
        ->set('selectedSkills', [$skill->id])
        ->call('save')
        ->assertDispatched('realisationAdded');
        
    $this->assertDatabaseHas('realisations', [
        'user_id' => $user->id,
        'title' => 'New Realisation',
        'type' => 'type',
    ]);
});

test('user can edit an realisation', function () {
    $user = User::factory()->create();
    $realisation = Realisation::factory()->create(['user_id' => $user->id, 'title' => 'Old Realisation']);
    
    $component = Livewire::actingAs($user)
        ->test(ManageRealisation::class)
        ->call('edit', $realisation->id);
    
    // Check if the component has loaded the realisation data correctly
    $component->assertSet('title', 'Old Realisation');
    
    // Now update the title and save
    $component
        ->set('title', 'Updated Realisation')
        ->call('save');
    
    // Check the database directly
    $updatedRealisation = Realisation::find($realisation->id);
    expect($updatedRealisation->title)->toBe('Updated Realisation');
});

test('user can delete an realisation', function () {
    $user = User::factory()->create();
    $realisation = Realisation::factory()->create(['user_id' => $user->id]);
    
    Livewire::actingAs($user)
        ->test(ListRealisation::class)
        ->call('deleteRealisation', $realisation->id)
        ->assertDispatched('realisationDeleted');
        
    $this->assertDatabaseMissing('realisations', [
        'id' => $realisation->id,
    ]);
});