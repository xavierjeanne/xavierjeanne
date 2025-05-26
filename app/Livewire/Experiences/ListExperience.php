<?php

namespace App\Livewire\Experiences;

use App\Models\Experience;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListExperience extends Component
{
    public $experiences = [];
    
    protected $listeners = [
        'experienceAdded' => 'refreshExperiences',
        'experienceUpdated' => 'refreshExperiences',
        'experienceDeleted' => 'refreshExperiences'
    ];
    
    public function mount()
    {
        $this->refreshExperiences();
    }
    
    public function refreshExperiences()
    {
        $this->experiences = Experience::where('user_id', Auth::id())
            ->with('skills')
            ->orderBy('date_debut', 'desc')
            ->get();
    }
    
    public function editExperience($experienceId)
    {
        $this->dispatch('editExperience', experienceId: $experienceId);
    }
    
    public function deleteExperience($experienceId)
    {
        $experience = Experience::findOrFail($experienceId);
        $experience->skills()->detach();
        $experience->delete();
        
        $this->refreshExperiences();
        $this->dispatch('experienceDeleted');
    }
    
    public function render()
    {
        return view('livewire.experiences.list-experience');
    }
}