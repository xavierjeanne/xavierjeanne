<div>
    <livewire:skills.list-skill />
    @if (!$isEditing)
        <div class="flex justify-end mt-5 mb-5">
            <flux:button wire:click="create" variant="danger">
                {{ __('Ajouter une nouvelle skill') }}
            </flux:button>
        </div>
    @else
        <div class="rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">{{ $skillId ? __('Editer la skill') : __('Ajouter une nouvelle skill') }}</h3>
            <form wire:submit.prevent="save" class="space-y-4">
                <div>
                    <flux:input wire:model="title" :label="__('Titre')" type="text" required />
                </div>
                
                <div>
                    <flux:input wire:model="level" :label="__('Level')" type="number" required />
                </div>
                
    
                
                <div>
                    <flux:textarea wire:model="description" :label="__('Description')" required />
                </div>
                
                <div>
                <flux:input type="file" wire:model="logo" label="Logo"/>
                @if($logo && method_exists($logo, 'temporaryUrl'))
                    <div class="mt-2">
                        <p>Preview:</p>
                        <img src="{{ $logo->temporaryUrl() }}" alt="Logo Preview" class="w-20 h-20 object-cover">
                    </div>
                @elseif($logo)
                    <div class="mt-2 flex items-center gap-2">
                        <p>Current Logo:</p>
                        <img src="{{ Storage::url($logo) }}" alt="Current Logo" class="w-20 h-20 object-cover">
                        <flux:button wire:click="deleteLogo" variant="danger" size="sm" type="button">
                            {{ __('Delete') }}
                        </flux:button>
                    </div>
                @endif
            </div>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <flux:button variant="danger" type="submit">
                        {{ __('Sauvegarder') }}
                    </flux:button>
                </div>
            </form>
        </div>
    @endif
</div>