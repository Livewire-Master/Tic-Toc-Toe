<?php

namespace App\Livewire\Page\Dashboard;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('Profile')]
class ProfilePage extends Component
{
    public string $display_name;
    public string $old_password;
    public string $new_password;

    /**
     * Get validation rules based on the method.
     */
    public function rules(string $method): array
    {
        $_ = [
            'profile_info' => [
                'display_name' => ['required', 'min:3', 'max:32']
            ],
            'password' => [
                'old_password' => ['required', 'min:3', 'max:32'],
                'new_password' => ['required', 'min:3', 'max:32'],
            ],
        ];

        return $_[$method];
    }

    /**
     * Mount the component
     */
    public function mount(): void
    {
        $this->display_name = auth()->user()->display_name;
    }

    /**
     * Update profile info based on user entries.
     */
    public function updateProfileInfo(): void
    {
        $this->validate($this->rules('profile_info'));

        auth()->user()->update(
            [
                'display_name' => $this->display_name
            ]
        );
    }

    /**
     * Update user's password.
     */
    public function updatePassword(): void
    {
        $this->validate($this->rules('password'));

        if ($this->old_password === $this->new_password) {
            $this->addError('new_password', 'New password can not be the same as the old.');
            return;
        }

        if (!Hash::check($this->old_password, auth()->user()->password))
        {
            $this->addError('old_password', 'Your old password is incorrect.');
            return;
        }

        auth()->user()->update(
            [
                'password' => $this->new_password
            ]
        );
    }
}
