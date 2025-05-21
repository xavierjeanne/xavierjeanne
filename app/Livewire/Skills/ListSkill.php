<?php

namespace App\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListSkill extends Component
{
    public $skills = [];
    
    protected $listeners = [
        'skillAdded' => 'refreshSkills',
        'skillUpdated' => 'refreshSkills',
        'skillDeleted' => 'refreshSkills'
    ];
    
    public function mount()
    {
        $this->refreshSkills();
    }
    
    public function refreshSkills()
    {
        $this->skills = Skill::where('user_id', Auth::id())
            ->orderBy('title', 'desc')
            ->get();
    }
    
    public function editSkill($skillId)
    {
        $this->dispatch('editSkill', skillId: $skillId);
    }
    
    public function deleteSkill($skillId)
    {
        $skill = Skill::findOrFail($skillId);
        $skill->delete();
        
        $this->refreshSkills();
        $this->dispatch('skill-deleted');
    }
    
    public function render()
    {
        return view('livewire.skills.list-skill');
    }
}