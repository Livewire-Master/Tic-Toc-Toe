<form action="{{ route('logout') }}" method="post">
    <button type="submit" class="w-full flex items-center gap-2 rounded-lg px-4 py-2 animate hover:bg-white/5">
        @csrf
        <x-icon.exit class="w-6 h-6"/>
        <span>Logout</span>
    </button>
</form>
