<?php

namespace App\Livewire\Experiences;

use App\Models\Experience;
use App\Models\Skill;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ManageExperience extends Component
{
    public $experiences = [];
    public $skills = [];
    
    // Form properties
    public $experienceId = null;
    public $title = '';
    public $date_debut = '';
    public $date_fin = '';
    public $entreprise = '';
    public $description = '';
    public $selectedSkills = [];
    
    public $isEditing = false;
    
    protected $listeners = ['editExperience' => 'edit'];
    
    public function mount()
    {
        $this->skills = Skill::all();
    }
    
    public function create()
    {
        $this->resetForm();
        $this->isEditing = true;
    }
    
    public function edit($experienceId)
    {
        $this->resetForm();
        
        $experience = Experience::with('skills')->findOrFail($experienceId);
        
        $this->experienceId = $experience->id;
        $this->title = $experience->title;
        $this->date_debut = $experience->date_debut->format('Y-m-d');
        $this->date_fin = $experience->date_fin ? $experience->date_fin->format('Y-m-d') : '';
        $this->entreprise = $experience->entreprise;
        $this->description = $experience->description;
        $this->selectedSkills = $experience->skills->pluck('id')->toArray();
        
        $this->isEditing = true;
    }
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'entreprise' => 'required|string|max:255',
            'description' => 'required|string',
            'selectedSkills' => 'array',
        ]);
        
        if ($this->experienceId) {
            // Update existing experience
            $experience = Experience::findOrFail($this->experienceId);
            $eventName = 'experience-updated';
        } else {
            // Create new experience
            $experience = new Experience();
            $experience->user_id = Auth::id();
            $eventName = 'experience-added';
        }
        
        $experience->title = $this->title;
        $experience->date_debut = $this->date_debut;
        $experience->date_fin = $this->date_fin ?: null;
        $experience->entreprise = $this->entreprise;
        $experience->description = $this->description;
        $experience->save();
        
        // Sync skills
        $experience->skills()->sync($this->selectedSkills);
        
        $this->resetForm();
        $this->isEditing = false;
        
        // Dispatch events for the list component to refresh
        $this->dispatch($eventName);
        $this->dispatch('experienceAdded');
        $this->dispatch('experienceUpdated');
    }
    
  
    
    private function resetForm()
    {
        $this->experienceId = null;
        $this->title = '';
        $this->date_debut = '';
        $this->date_fin = '';
        $this->entreprise = '';
        $this->description = '';
        $this->selectedSkills = [];
    }
    
    public function render()
    {
        return view('livewire.experiences.manage-experience');
    }
}