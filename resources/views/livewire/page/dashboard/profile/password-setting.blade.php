<div class="flex flex-col gap-4 w-full max-w-xs">
    <x-dashboard.page.subtitle label="Password Setting"/>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="Old Password"/>
        <x-form.input
            wire:model="old_password"
            icon="password"
            placeholder="Enter your old password"
        />
    </div>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="New Password"/>
        <x-form.input
            wire:model="new_password"
            icon="password"
            placeholder="Enter your new password"
        />
    </div>

    <x-form.button
        wire:click.prevent="updatePassword"
        label="Change Password"
        type="primary"
    />
</div>
