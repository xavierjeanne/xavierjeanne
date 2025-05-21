<div>
    <livewire:formations.list-formation />
    @if (!$isEditing)
        <div class="flex justify-end mt-5 mb-5">
            <flux:button wire:click="create" variant="danger">
                {{ __('Ajouter une nouvelle formation') }}
            </flux:button>
        </div>
    @else
        <div class="rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">{{ $formationId ? __('Editer la formation') : __('Ajouter une nouvelle expérience') }}</h3>
            
            <form wire:submit.prevent="save" class="space-y-4">
                <div>
                    <flux:input wire:model="title" :label="__('Titre')" type="text" required />
                </div>

                <div>
                    <flux:input wire:model="organisme" :label="__('Organisme')" type="text" required />
                </div>
                
                <div>
                    <flux:input wire:model="level" :label="__('Level')" type="number" required />
                </div>
                
                <div>
                    <div>
                        <flux:input wire:model="date" :label="__('Date')" type="text" />
                    </div>
                </div>
                
                <div>
                    <flux:textarea wire:model="description" :label="__('Description')" required />
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