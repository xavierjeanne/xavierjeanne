<?php

namespace App\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManageSkill extends Component
{
    use WithFileUploads;
    
    // Form properties
    public $skillId = null;
    public $title = '';
    public $level = '';
    public $description = '';
    public $logo = null;
    public $isEditing = false;
    
    protected $listeners = ['editSkill' => 'edit'];
    
    
    
    public function create()
    {
        $this->resetForm();
        $this->isEditing = true;
    }
    
    public function edit($skillId)
    {
        $this->resetForm();
        
        $skill = Skill::findOrFail($skillId);
        
        $this->skillId = $skill->id;
        $this->title = $skill->title;
        $this->logo = $skill->logo; 
        $this->level = $skill->level;
        $this->description = $skill->description;
       
        
        $this->isEditing = true;
    }
    
    public function save()
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'level' => ['nullable','integer','max:255'],
            'description' => ['nullable','string'],
        ];

        // Only validate logo and cv if they are file upload objects
        if ($this->logo && !is_string($this->logo)) {
            $rules['logo'] = ['nullable', 'mimes:jpg,jpeg,png,pdf', 'max:1024'];
        }
        
      
        $validated = $this->validate($rules);
        if ($this->skillId) {
            // Update existing skill
            $skill = Skill::findOrFail($this->skillId);
            $eventName = 'skill-updated';
        } else {
            // Create new skill
            $skill = new Skill();
            $skill->user_id = Auth::id();
            $eventName = 'skill-added';
        }

        $skill->fill($validated);

        if ($this->logo && !is_string($this->logo)) {
            $filename = $this->title .'.'. $this->logo->getClientOriginalExtension();
            
            // Store the file in the public storage under a 'logos' directory
            $this->logo->storeAs('skills', $filename, 'public');
            
            // Save the logo path to the user model
            $skill->logo = 'skills/' . $filename;
        }
        
        
        $skill->save();
        
        
        $this->resetForm();
        $this->isEditing = false;
        
        // Dispatch events for the list component to refresh
        $this->dispatch($eventName);
        $this->dispatch('skillAdded');
        $this->dispatch('skillUpdated');
    }
    
  
    
    private function resetForm()
    {
        $this->skillId = null;
        $this->title = '';
        $this->level = '';
        $this->description = '';
        $this->logo = '';
    }
    
    public function deleteLogo(): void
    {
        $skill = Skill::findOrFail($this->skillId);
        
        if ($skill->logo) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($skill->logo)) {
                Storage::disk('public')->delete($skill->logo);
            }
            
            // Remove the reference from the user model
            $skill->logo = null;
            $skill->save();
            
            // Update the component property
            $this->logo = null;
            
            $this->dispatch('profile-updated', title: $skill->title);
        }
    }

    public function render()
    {
        return view('livewire.skills.manage-skill');
    }
}