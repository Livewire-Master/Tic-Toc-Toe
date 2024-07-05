<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <x-dashboard.page.title label="Profile"/>
    </div>

    <div class="flex items-start justify-between gap-32">
        <div class="flex gap-16 w-full">
            @include('livewire.page.dashboard.profile.info')

            @include('livewire.page.dashboard.profile.password-setting')
        </div>

        @include('livewire.page.dashboard.profile.preview')
    </div>
</div>
