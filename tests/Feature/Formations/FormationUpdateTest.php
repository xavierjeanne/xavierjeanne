<?php

use App\Livewire\Formations\ListFormation;
use App\Livewire\Formations\ManageFormation;
use App\Models\Formation;
use App\Models\User;
use App\Models\Skill;
use Livewire\Livewire;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('formation list can be rendered', function () {
    $user = User::factory()->create();
    
    $response = $this->actingAs($user)->get('/formations');
    
    $response->assertStatus(200);
});

test('user can view their formations', function () {
    $user = User::factory()->create();
    $formation = Formation::factory()->create(['user_id' => $user->id]);
    
    Livewire::actingAs($user)
        ->test(ListFormation::class)
        ->assertSee($formation->title)
        ->assertSee($formation->level);
});

test('user can create a new formation', function () {
    $user = User::factory()->create();
    $skill = Skill::factory()->create();
    
    Livewire::actingAs($user)
        ->test(ManageFormation::class)
        ->call('create')
        ->set('title', 'New Formation')
        ->set('level', '3')
        ->set('date', '2023-01-01')
        ->set('organisme', 'ifpa')
        ->set('description', 'Test description')
        ->set('selectedSkills', [$skill->id])
        ->call('save')
        ->assertDispatched('formationAdded');
        
    $this->assertDatabaseHas('formations', [
        'user_id' => $user->id,
        'title' => 'New Formation',
        'organisme' => 'ifpa',
    ]);
});

test('user can edit an formation', function () {
    $user = User::factory()->create();
    $formation = Formation::factory()->create(['user_id' => $user->id, 'title' => 'Old Formation']);
    
    $component = Livewire::actingAs($user)
        ->test(ManageFormation::class)
        ->call('edit', $formation->id);
    
    // Check if the component has loaded the formation data correctly
    $component->assertSet('title', 'Old Formation');
    
    // Now update the title and save
    $component
        ->set('title', 'Updated Formation')
        ->call('save');
    
    // Check the database directly
    $updatedFormation = Formation::find($formation->id);
    expect($updatedFormation->title)->toBe('Updated Formation');
});

test('user can delete an formation', function () {
    $user = User::factory()->create();
    $formation = Formation::factory()->create(['user_id' => $user->id]);
    
    Livewire::actingAs($user)
        ->test(ListFormation::class)
        ->call('deleteFormation', $formation->id)
        ->assertDispatched('formationDeleted');
        
    $this->assertDatabaseMissing('formations', [
        'id' => $formation->id,
    ]);
});