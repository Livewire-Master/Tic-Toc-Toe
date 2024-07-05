<?php

namespace App\Livewire\Page;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $user = User::where('email', $this->email)->first();
        if (!$user || !Hash::check($this->password, $user->password))
        {
            $this->addError('password', 'Your credentials does not match our records.');
            return;
        }

        Auth::login($user);
        $this->redirectRoute('page.dashboard.games', navigate: true);
    }
}
