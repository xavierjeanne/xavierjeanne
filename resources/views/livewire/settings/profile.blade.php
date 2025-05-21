<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name" />

            <div>
                <flux:input wire:model="email" :label="__('Email')" type="email" required autocomplete="email" />
                

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <flux:text class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <flux:link class="text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </flux:link>
                        </flux:text>

                        @if (session('status') === 'verification-link-sent')
                            <flux:text class="mt-2 font-medium !dark:text-green-400 !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </flux:text>
                        @endif
                    </div>
                @endif
            </div>
            <div>
                <flux:input wire:model="phone" :label="__('Phone')" type="text" autocomplete="phone" />
            </div>
            <div>
                <flux:input wire:model="github" :label="__('Github')" type="text" autocomplete="github" />
            </div>
            <div>
                <flux:input wire:model="linkedin" :label="__('Linkedin')" type="text" autocomplete="linkedin" />
            </div>
            <div>
                <flux:input wire:model="site" :label="__('Site')" type="text" autocomplete="site" />
            </div>
            <div>
                <flux:input wire:model="adresse" :label="__('Adresse')" type="text" autocomplete="adresse" />
            </div>
            <div>
                <flux:textarea wire:model="description" :label="__('Description')"  autocomplete="description" />
            </div>
            
            <div>
                <flux:input type="file" wire:model="logo" label="Logo"/>
                      
                @if($logo && method_exists($logo, 'temporaryUrl'))
                    <div class="mt-2">
                        <p>Preview:</p>
                        <img src="{{ $logo->temporaryUrl() }}" alt="Logo Preview" class="w-20 h-20 object-cover">
                    </div>
                @elseif(auth()->user()->logo)
                    <div class="mt-2 flex items-center gap-2">
                        <p>Current Logo:</p>
                        <img src="{{ Storage::url(auth()->user()->logo) }}" alt="Current Logo" class="w-20 h-20 object-cover">
                        <flux:button wire:click="deleteLogo" variant="danger" size="sm" type="button">
                            {{ __('Delete') }}
                        </flux:button>
                    </div>
                @endif
            </div>
            
            <div>
                <flux:input type="file" wire:model="cv" label="Cv"/>
                
                @if($cv && method_exists($cv, 'getClientOriginalName'))
                    <div class="mt-2">
                        <p>Selected file: {{ $cv->getClientOriginalName() }}</p>
                    </div>
                @elseif(auth()->user()->cv)
                    <div class="mt-2 flex items-center gap-2">
                        <p>Current CV: <a href="{{ Storage::url(auth()->user()->cv) }}" target="_blank" class="text-blue-500 hover:underline">View CV</a></p>
                        <flux:button wire:click="deleteCV" variant="danger" size="sm" type="button">
                            {{ __('Delete') }}
                        </flux:button>
                    </div>
                @endif
            </div>
            

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
