<?php

namespace App\Livewire\Page\Dashboard;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

#[Layout('components.layouts.dashboard')]
#[Title('Profile')]
class ProfilePage extends Component
{
    use WithFileUploads;

    public string $display_name;
    public string $old_password;
    public string $new_password;
    public ?TemporaryUploadedFile $avatar = null;

    /**
     * Get validation rules based on the method.
     */
    public function rules(string $method): array
    {
        $_ = [
            'profile_info' => [
                'avatar' => ['sometimes', 'nullable', 'image', 'max:64'],
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

        $updates = [
            'display_name' => $this->display_name,
        ];

        if ($this->avatar) {
            // store avatar
            $file_hash = md5_file($this->avatar->getRealPath());

            $file_path = "public/user/avatar/$file_hash";
            $file_name = md5($file_hash) . '.' . $this->avatar->getClientOriginalExtension();

            $uploaded_path = "$file_path/$file_name";

            if (!Storage::exists($uploaded_path)) {
                $uploaded_path = $this->avatar->storePubliclyAs(
                    path: $file_path,
                    name: $file_name,
                );
            }

            $updates['avatar'] = $uploaded_path;
        }

        auth()->user()->update($updates);
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

        if (!Hash::check($this->old_password, auth()->user()->password)) {
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
