<div class="space-y-6">
    @if (count($formations) > 0)
        @foreach ($formations as $formation)
            <div class=" rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $formation->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ $formation->title }}</p>
                       
                    </div>
                    <div class="flex space-x-2">
                        <flux:button wire:click="editFormation({{ $formation->id }})" variant="filled">
                            {{ __('Editer') }}
                        </flux:button>
                        <flux:button 
                            wire:click="deleteFormation({{ $formation->id }})"
                            wire:confirm="Êtes-vous sûr de vouloir effacer cette formation : {{ $formation->title }} - {{ $formation->entreprise }}?"
                            variant="primary">
                            {{ __('Effacer') }}
                        </flux:button>
                       
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="text-gray-700 dark:text-gray-300">{{ $formation->description }}</p>
                </div>
                
            </div>
           
        @endforeach
    @else
        <div class="rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 dark:text-gray-400">{{ __('Aucune formation, ajoutée votre première!') }}</p>
        </div>
    @endif
</div>