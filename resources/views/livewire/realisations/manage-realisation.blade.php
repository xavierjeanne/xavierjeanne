<div>
    <livewire:realisations.list-realisation />
    @if (!$isEditing)
        <div class="flex justify-end mt-5 mb-5">
            <flux:button wire:click="create" variant="danger">
                {{ __('Ajouter une nouvelle realisation') }}
            </flux:button>
        </div>
    @else
        <div class="rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">{{ $realisationId ? __('Editer la realisation') : __('Ajouter une nouvelle réalisation') }}</h3>
            <form wire:submit.prevent="save" class="space-y-4">
                <div>
                    <flux:input wire:model="title" :label="__('Titre')" type="text" required />
                </div>
                
                <div>
                    <flux:input wire:model="company" :label="__('Entreprise')" type="text" required />
                </div>

                <div>
                    <flux:input wire:model="link" :label="__('Lien')" type="text" required />
                </div>
                
    
                
                <div>
                    <flux:textarea wire:model="description" :label="__('Description')" required />
                </div>
                
                <div>
                    <flux:label :value="__('Skills')" />
                    <div class="mt-2 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
                        @foreach ($skills as $skill)
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="selectedSkills" value="{{ $skill->id }}" 
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ $skill->title }}</span>
                            </label>
                        @endforeach
                    </div>
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