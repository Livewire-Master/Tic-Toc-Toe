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
        $this->validate();

        auth()->user()->update(
            [
                'display_name' => $this->display_name
            ]
        );
    }
}
