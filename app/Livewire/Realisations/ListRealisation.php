<?php

namespace App\Livewire\Realisations;

use App\Models\Realisation;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListRealisation extends Component
{
    public $realisations = [];
    
    protected $listeners = [
        'realisationAdded' => 'refreshRealisations',
        'realisationUpdated' => 'refreshRealisations',
        'realisationDeleted' => 'refreshRealisations'
    ];
    
    public function mount()
    {
        $this->refreshRealisations();
    }
    
    public function refreshRealisations()
    {
        $this->realisations = Realisation::where('user_id', Auth::id())
            ->with('skills')
            ->orderBy('title', 'desc')
            ->get();
    }
    
    public function editRealisation($realisationId)
    {
        $this->dispatch('editRealisation', realisationId: $realisationId);
    }
    
    public function deleteRealisation($realisationId)
    {
        $realisation = Realisation::findOrFail($realisationId);
        $realisation->skills()->detach();
        $realisation->delete();
        
        $this->refreshRealisations();
        $this->dispatch('realisationDeleted');
    }
    
    public function render()
    {
        return view('livewire.realisations.list-realisation');
    }
}