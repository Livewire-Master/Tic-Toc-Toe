<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class LoginPage extends Component
{
    #[Rule(['required', 'email'])]
    public string $email;

    #[Rule(['required', 'min:3', 'max:32'])]
    public string $password;

    /**
     * Process login request based on email and password.
     */
    public function login(): void
    {
        $this->validate();
    }
}
