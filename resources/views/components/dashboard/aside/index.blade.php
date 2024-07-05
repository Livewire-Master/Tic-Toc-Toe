<aside class="col-span-2 flex flex-col gap-4 text-secondary-400">
    <x-dashboard.aside.link
        label="Games"
        icon="dice"
        href="{{ route('page.dashboard.games') }}"
    />

    <x-dashboard.aside.link
        label="Transactions"
        icon="dollar"
        href="{{ route('page.dashboard.transactions') }}"
    />

    <x-dashboard.aside.link
        label="Profile"
        icon="user"
        href="{{ route('page.dashboard.profile') }}"
    />

    <x-dashboard.aside.link
        label="Logout"
        icon="exit"
        icon-class="rotate-180"
        href="{{ route('logout') }}"
    />
</aside>
