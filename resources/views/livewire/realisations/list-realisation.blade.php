<div class="space-y-6">
    @if (count($realisations) > 0)
        @foreach ($realisations as $realisation)
            <div class=" rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $realisation->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ $realisation->entreprise }}</p>
                       
                    </div>
                    <div class="flex space-x-2">
                        <flux:button wire:click="editRealisation({{ $realisation->id }})" variant="filled">
                            {{ __('Editer') }}
                        </flux:button>
                        <flux:button 
                            wire:click="deleteRealisation({{ $realisation->id }})"
                            wire:confirm="Êtes-vous sûr de vouloir effacer cette expérience : {{ $realisation->title }}?"
                            variant="primary">
                            {{ __('Effacer') }}
                        </flux:button>
                       
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="text-gray-700 dark:text-gray-300">{{ $realisation->description }}</p>
                </div>
                
                @if ($realisation->skills && $realisation->skills->count() > 0)
                    <div class="mt-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">{{ __('Skills') }}:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($realisation->skills as $skill)
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 text-xs rounded-full">
                                    {{ $skill->title }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
           
        @endforeach
    @else
        <div class="rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 dark:text-gray-400">{{ __('Aucune realisation, ajoutée votre première!') }}</p>
        </div>
    @endif
</div>