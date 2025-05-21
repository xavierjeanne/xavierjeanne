<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads; 
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class Profile extends Component
{
    use WithFileUploads;

    public string $name = '';

    public string $email = '';
    
    public ?string $phone = '';
    public ?string $github = '';
    public ?string $linkedin = '';
    public ?string $site = '';
    public ?string $adresse = '';
    public ?string $description = '';
    public $logo = null;
    public $cv = null;
    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->github = Auth::user()->github;
        $this->linkedin = Auth::user()->linkedin;
        $this->site = Auth::user()->site;
        $this->adresse = Auth::user()->adresse;
        $this->description = Auth::user()->description;
        $this->logo = Auth::user()->logo;
        $this->cv = Auth::user()->cv;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        // Prepare validation rules
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id),
            ],
            'phone' => ['nullable','string','max:255'],
            'github' => ['nullable','string','max:255'],
            'linkedin' => ['nullable','string','max:255'],
            'site' => ['nullable','string','max:255'],
            'adresse' => ['nullable','string','max:255'],
            'description' => ['nullable','string'],
        ];

        // Only validate logo and cv if they are file upload objects
        if ($this->logo && !is_string($this->logo)) {
            $rules['logo'] = ['nullable', 'mimes:jpg,jpeg,png,pdf', 'max:1024'];
        }
        
        if ($this->cv && !is_string($this->cv)) {
            $rules['cv'] = ['nullable', 'mimes:pdf,doc,docx,jpg,jpeg,png,pdf,pptx', 'max:4096'];
        }

        $validated = $this->validate($rules);

        // Fill user with validated data
        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Handle logo upload if it's a file upload object
        if ($this->logo && !is_string($this->logo)) {
            $filename = 'logo.' . $this->logo->getClientOriginalExtension();
            
            // Store the file in the public storage under a 'logos' directory
            $this->logo->storeAs('logos', $filename, 'public');
            
            // Save the logo path to the user model
            $user->logo = 'logos/' . $filename;
        }
        
        // Handle CV upload if it's a file upload object
        if ($this->cv && !is_string($this->cv)) {
            $filename = 'cv.' . $this->cv->getClientOriginalExtension();
            
            // Store the file in the public storage under a 'cvs' directory
            $this->cv->storeAs('cvs', $filename, 'public');
            
            // Save the CV path to the user model
            $user->cv = 'cvs/' . $filename;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function resendVerificationNotification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

        /**
     * Delete the user's logo.
     */
    public function deleteLogo(): void
    {
        $user = Auth::user();
        
        if ($user->logo) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($user->logo)) {
                Storage::disk('public')->delete($user->logo);
            }
            
            // Remove the reference from the user model
            $user->logo = null;
            $user->save();
            
            // Update the component property
            $this->logo = null;
            
            $this->dispatch('profile-updated', name: $user->name);
        }
    }
    
    /**
     * Delete the user's CV.
     */
    public function deleteCV(): void
    {
        $user = Auth::user();
        
        if ($user->cv) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($user->cv)) {
                Storage::disk('public')->delete($user->cv);
            }
            
            // Remove the reference from the user model
            $user->cv = null;
            $user->save();
            
            // Update the component property
            $this->cv = null;
            
            $this->dispatch('profile-updated', name: $user->name);
        }
    }
}
