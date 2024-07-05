<?php

namespace App\Livewire\Page\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('Profile')]
class ProfilePage extends Component
{
    #[Rule(['required', 'min:3', 'max:24'])]
    public string $display_name;

    #[Rule(['required', 'min:3', 'max:32'])]
    public string $old_password;

    #[Rule(['required', 'min:3', 'max:32'])]
    public string $new_password;

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
        $this->validateOnly('display_name');

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
        if ($this->old_password === $this->new_password)
        {
            $this->addError('new_password', 'New password can not be the same as the old.');
            return;
        }

        auth()->user()->update(
            [
                'display_name' => $this->display_name
            ]
        );
    }
}
