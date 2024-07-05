<div class="w-full min-h-svh flex flex-col items-center justify-center gap-8 bg-gradient-to-br from-secondary-950 to-secondary-900">

    <x-auth.header caption="Play classy but modern!"/>

    <main class="w-full max-w-xs grid grid-cols-2 gap-2">
        <x-auth.link href="{{ route('page.login') }}" label="login"/>
        <x-auth.link href="{{ route('page.signup') }}" label="sign up"/>
    </main>

    <x-auth.footer/>
</div>
