<div class="flex flex-col gap-4 w-full max-w-xs">
    <x-dashboard.page.subtitle label="Password Setting"/>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="Old Password"/>
        <x-form.input
            icon="password"
            placeholder="Enter your old password"
        />
    </div>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="New Password"/>
        <x-form.input
            icon="password"
            placeholder="Enter your new password"
        />
    </div>

    <button class="bg-primary-600 px-4 py-2 rounded-lg flex items-center justify-center plaza-sans uppercase hover:bg-primary-500 animate">
        Change
    </button>
</div>
