<?php

namespace App\Livewire\Formations;

use App\Models\Formation;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListFormation extends Component
{
    public $formations = [];
    
    protected $listeners = [
        'formationAdded' => 'refreshFormations',
        'formationUpdated' => 'refreshFormations',
        'formationDeleted' => 'refreshFormations'
    ];
    
    public function mount()
    {
        $this->refreshFormations();
    }
    
    public function refreshFormations()
    {
        $this->formations = Formation::where('user_id', Auth::id())
            ->orderBy('title', 'desc')
            ->get();
    }
    
    public function editFormation($formationId)
    {
        $this->dispatch('editFormation', formationId: $formationId);
    }
    
    public function deleteFormation($formationId)
    {
        $formation = Formation::findOrFail($formationId);
        $formation->delete();
        
        $this->refreshFormations();
        $this->dispatch('formation-deleted');
    }
    
    public function render()
    {
        return view('livewire.formations.list-formation');
    }
}