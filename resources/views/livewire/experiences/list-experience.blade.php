<div class="space-y-6">
    @if (count($experiences) > 0)
        @foreach ($experiences as $experience)
            <div class=" rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $experience->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ $experience->entreprise }}</p>
                       
                    </div>
                    <div class="flex space-x-2">
                        <flux:button wire:click="editExperience({{ $experience->id }})" variant="filled">
                            {{ __('Editer') }}
                        </flux:button>
                        <flux:button 
                            wire:click="deleteExperience({{ $experience->id }})"
                            wire:confirm="Êtes-vous sûr de vouloir effacer cette expérience : {{ $experience->title }} - {{ $experience->entreprise }}?"
                            variant="primary">
                            {{ __('Effacer') }}
                        </flux:button>
                       
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="text-gray-700 dark:text-gray-300">{{ $experience->description }}</p>
                </div>
                
                @if ($experience->skills && $experience->skills->count() > 0)
                    <div class="mt-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">{{ __('Skills') }}:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($experience->skills as $skill)
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
            <p class="text-gray-600 dark:text-gray-400">{{ __('Aucune experience, ajoutée votre première!') }}</p>
        </div>
    @endif
</div>