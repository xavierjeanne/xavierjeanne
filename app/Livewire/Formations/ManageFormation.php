<?php

namespace App\Livewire\Formations;

use App\Models\Formation;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ManageFormation extends Component
{
   
    // Form properties
    public $formationId = null;
    public $title = '';
    public $level = '';
    public $date = '';
    public $organisme = '';
    public $description = '';
    
    public $isEditing = false;
    
    protected $listeners = ['editFormation' => 'edit'];
    
    
    public function create()
    {
        $this->resetForm();
        $this->isEditing = true;
    }
    
    public function edit($formationId)
    {
        $this->resetForm();
        
        $formation = Formation::findOrFail($formationId);
        
        $this->formationId = $formation->id;
        $this->title = $formation->title;
        $this->level = $formation->level;
        $this->date = $formation->date;
        $this->organisme = $formation->organisme;
        $this->description = $formation->description;
        
        $this->isEditing = true;
    }
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'date' =>'required|string|max:255',
            'organisme' =>'required|string|max:255',
            'level' => 'required|integer|max:255',
            'description' => 'required|string',
            
        ]);
        
        if ($this->formationId) {
            // Update existing formation
            $formation = Formation::findOrFail($this->formationId);
            $eventName = 'formation-updated';
        } else {
            // Create new formation
            $formation = new Formation();
            $formation->user_id = Auth::id();
            $eventName = 'formation-added';
        }
        
        $formation->title = $this->title;
        $formation->level = $this->level;
        $formation->date = $this->date;
        $formation->organisme = $this->organisme;
        $formation->description = $this->description;
        $formation->save();
        
      
        $this->resetForm();
        $this->isEditing = false;
        
        // Dispatch events for the list component to refresh
        $this->dispatch($eventName);
        $this->dispatch('formationAdded');
        $this->dispatch('formationUpdated');
    }
    
  
    
    private function resetForm()
    {
        $this->formationId = null;
        $this->title = '';
        $this->level = '';
        $this->date = '';
        $this->organisme = '';
        $this->description = '';
    }
    
    public function render()
    {
        return view('livewire.formations.manage-formation');
    }
}