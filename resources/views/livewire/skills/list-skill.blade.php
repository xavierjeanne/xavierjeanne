<div class="space-y-6">
    @if (count($skills) > 0)
        @foreach ($skills as $skill)
            <div class=" rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $skill->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ $skill->level }}</p>
                       
                    </div>
                    <div class="flex space-x-2">
                        <flux:button wire:click="editSkill({{ $skill->id }})" variant="filled">
                            {{ __('Editer') }}
                        </flux:button>
                        <flux:button 
                            wire:click="deleteSkill({{ $skill->id }})"
                            wire:confirm="Êtes-vous sûr de vouloir effacer cette expérience : {{ $skill->title }} ?"
                            variant="primary">
                            {{ __('Effacer') }}
                        </flux:button>
                       
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="text-gray-700 dark:text-gray-300">{{ $skill->description }}</p>
                </div>
                
                
            </div>
           
        @endforeach
    @else
        <div class="rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 dark:text-gray-400">{{ __('Aucune skill, ajoutée votre première!') }}</p>
        </div>
    @endif
</div>