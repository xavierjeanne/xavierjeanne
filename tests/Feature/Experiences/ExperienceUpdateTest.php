<?php

use App\Livewire\Experiences\ListExperience;
use App\Livewire\Experiences\ManageExperience;
use App\Models\Experience;
use App\Models\User;
use App\Models\Skill;
use Livewire\Livewire;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('experience list can be rendered', function () {
    $user = User::factory()->create();
    
    $response = $this->actingAs($user)->get('/experiences');
    
    $response->assertStatus(200);
});

test('user can view their experiences', function () {
    $user = User::factory()->create();
    $experience = Experience::factory()->create(['user_id' => $user->id]);
    
    Livewire::actingAs($user)
        ->test(ListExperience::class)
        ->assertSee($experience->title)
        ->assertSee($experience->entreprise);
});

test('user can create a new experience', function () {
    $user = User::factory()->create();
    $skill = Skill::factory()->create();
    
    Livewire::actingAs($user)
        ->test(ManageExperience::class)
        ->call('create')
        ->set('title', 'New Experience')
        ->set('entreprise', 'Test Company')
        ->set('date_debut', '2023-01-01')
        ->set('date_fin', '2023-12-31')
        ->set('description', 'Test description')
        ->set('selectedSkills', [$skill->id])
        ->call('save')
        ->assertDispatched('experienceAdded');
        
    $this->assertDatabaseHas('experiences', [
        'user_id' => $user->id,
        'title' => 'New Experience',
        'entreprise' => 'Test Company',
    ]);
});

test('user can edit an experience', function () {
    $user = User::factory()->create();
    $experience = Experience::factory()->create(['user_id' => $user->id, 'title' => 'Old Experience']);
    
    $component = Livewire::actingAs($user)
        ->test(ManageExperience::class)
        ->call('edit', $experience->id);
    
    // Check if the component has loaded the experience data correctly
    $component->assertSet('title', 'Old Experience');
    
    // Now update the title and save
    $component
        ->set('title', 'Updated Experience')
        ->call('save');
    
    // Check the database directly
    $updatedExperience = Experience::find($experience->id);
    expect($updatedExperience->title)->toBe('Updated Experience');
});

test('user can delete an experience', function () {
    $user = User::factory()->create();
    $experience = Experience::factory()->create(['user_id' => $user->id]);
    
    Livewire::actingAs($user)
        ->test(ListExperience::class)
        ->call('deleteExperience', $experience->id)
        ->assertDispatched('experienceDeleted');
        
    $this->assertDatabaseMissing('experiences', [
        'id' => $experience->id,
    ]);
});