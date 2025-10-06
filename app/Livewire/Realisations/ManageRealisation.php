<?php

namespace App\Livewire\Realisations;

use App\Models\Realisation;
use App\Models\Skill;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ManageRealisation extends Component
{
     use WithFileUploads;
    public $realisations = [];
    public $skills = [];
    
    // Form properties
    public $realisationId = null;
    public $title = '';
    public $link = '';
    public $company = '';
    public $logo = null;
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
        $this->company = $realisation->company;
        $this->link = $realisation->link;
        $this->description = $realisation->description;
        $this->selectedSkills = $realisation->skills->pluck('id')->toArray();
        $this->logo = $realisation->logo;

        $this->isEditing = true;
    }
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'description' => 'required|string',
            'selectedSkills' => 'array',
        ]);
         if ($this->logo && !is_string($this->logo)) {
            $rules['logo'] = ['nullable', 'mimes:jpg,jpeg,png,pdf', 'max:1024'];
        }
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
        $realisation->company = $this->company;
        $realisation->link = $this->link;
       
        $realisation->description = $this->description;
        if ($this->logo && !is_string($this->logo)) {
            $filename = $this->title .'.'. $this->logo->getClientOriginalExtension();
            
            // Store the file in the public storage under a 'logos' directory
            $this->logo->storeAs('realisations', $filename, 'public');
            
            // Save the logo path to the user model
            $realisation->logo = 'realisations/' . $filename;
        }
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
        $this->company = '';
        $this->link = '';
        $this->description = '';
        $this->selectedSkills = [];
        $this->logo = null;
    }

    public function deleteLogo(): void
    {
        $realisation = Realisation::findOrFail($this->realisationId);

        if ($realisation->logo) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($realisation->logo)) {
                Storage::disk('public')->delete($realisation->logo);
            }
            
            // Remove the reference from the user model
            $realisation->logo = null;
            $realisation->save();
            
            // Update the component property
            $this->logo = null;

            $this->dispatch('profile-updated', title: $realisation->title);
        }
    }

    public function render()
    {
        return view('livewire.realisations.manage-realisation');
    }
}