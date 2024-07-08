<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <x-dashboard.page.title label="New Game"/>
    </div>

    <div class="flex items-start justify-between gap-32">
        @include('livewire.page.dashboard.game.create-page.configs')

        @include('livewire.page.dashboard.game.create-page.preview')
    </div>
</div>
