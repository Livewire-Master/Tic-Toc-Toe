<div class="w-full min-h-svh flex flex-col items-center justify-center gap-8 bg-gradient-to-br from-secondary-950 to-secondary-900">

    <x-auth.header caption="Enter your credentials to log-in"/>

    <main class="w-full max-w-xs">
        <form class="w-full flex flex-col gap-4">
            <x-form.input
                icon="email"
                type="email"
                placeholder="Enter your email address"
            />

            <x-form.input
                icon="password"
                type="password"
                placeholder="Enter your password"
            />

            <x-form.button label="login"/>

            <x-auth.link.captionable
                caption="Does not have an account?"
                route="{{ route('page.signup') }}"
                cta="Create"
            />
        </form>
    </main>

    <x-auth.footer/>
</div>
