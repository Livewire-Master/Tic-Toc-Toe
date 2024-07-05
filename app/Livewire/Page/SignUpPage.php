<?php

namespace App\Livewire\Page;

use App\Enums\UserStatus\UserStatus;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign Up')]
class SignUpPage extends Component
{
    #[Rule(['required', 'min:3', 'max:24'])]
    public string $display_name;

    #[Rule(['required', 'min:3', 'max:16', 'alpha_num', 'unique:users,username'])]
    public string $username;

    #[Rule(['required', 'email', 'unique:users,email'])]
    public string $email;

    #[Rule(['required', 'min:3', 'max:32'])]
    public string $password;

    /**
     * Handle register process based on user entered information.
     */
    public function signup(): void
    {
        $this->validate();

        $user = User::create(
            [
                'username' => $this->username,
                'display_name' => $this->display_name,
                'email' => $this->email,
                'password' => $this->password,
                'status' => UserStatus::Idle,
                'last_activity' => Carbon::now()
            ]
        );

        auth()->login($user);

        $this->redirectRoute('page.dashboard.games', navigate: true);
    }
}
