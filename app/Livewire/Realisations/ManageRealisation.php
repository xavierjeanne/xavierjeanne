<?php

namespace App\Livewire\Realisations;

use App\Models\Realisation;
use App\Models\Skill;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ManageRealisation extends Component
{
    public $realisations = [];
    public $skills = [];
    
    // Form properties
    public $realisationId = null;
    public $title = '';
    public $link = '';
    public $type = '';
    public $description = '';
    public $selectedSkills = [];
    
    public $isEditing = false;
    
    protected $listeners = ['editRealisation' => 'edit'];
    
    public function mount()
    {
        $this->skills = Skill::all();
    }
    
    public function create()
    {
        $this->resetForm();
        $this->isEditing = true;
    }
    
    public function edit($realisationId)
    {
        $this->resetForm();
        
        $realisation = Realisation::with('skills')->findOrFail($realisationId);
        
        $this->realisationId = $realisation->id;
        $this->title = $realisation->title;
        $this->type = $realisation->type;
        $this->link = $realisation->link;
        $this->description = $realisation->description;
        $this->selectedSkills = $realisation->skills->pluck('id')->toArray();
        
        $this->isEditing = true;
    }
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'description' => 'required|string',
            'selectedSkills' => 'array',
        ]);
        
        if ($this->realisationId) {
            // Update existing realisation
            $realisation = Realisation::findOrFail($this->realisationId);
            $eventName = 'realisation-updated';
        } else {
            // Create new realisation
            $realisation = new Realisation();
            $realisation->user_id = Auth::id();
            $eventName = 'realisation-added';
        }
        
        $realisation->title = $this->title;
        $realisation->type = $this->type;
        $realisation->link = $this->link;
        $realisation->description = $this->description;
        $realisation->save();
        
        // Sync skills
        $realisation->skills()->sync($this->selectedSkills);
        
        $this->resetForm();
        $this->isEditing = false;
        
        // Dispatch events for the list component to refresh
        $this->dispatch($eventName);
        $this->dispatch('realisationAdded');
        $this->dispatch('realisationUpdated');
    }
    
  
    
    private function resetForm()
    {
        $this->realisationId = null;
        $this->title = '';
        $this->type = '';
        $this->link = '';
        $this->description = '';
        $this->selectedSkills = [];
    }
    
    public function render()
    {
        return view('livewire.realisations.manage-realisation');
    }
}