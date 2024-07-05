<div
    class="w-full min-h-svh flex flex-col items-center justify-center gap-8 bg-gradient-to-br from-secondary-950 to-secondary-900">

    <x-auth.header caption="Create an account and have fun"/>

    <main class="w-full max-w-xs">
        <form class="w-full flex flex-col gap-4">
            <x-form.input
                type="text"
                icon="hashtag"
                placeholder="Enter your display name"
            />

            <x-form.input
                type="text"
                icon="user"
                placeholder="Enter your username"
            />

            <x-form.input
                type="email"
                icon="email"
                placeholder="Enter your email address"
            />

            <x-form.input
                type="password"
                icon="password"
                placeholder="Enter your password"
            />

            <x-form.button label="sign up"/>

            <x-auth.link.captionable
                caption="Has an account?"
                route="{{ route('page.login') }}"
                cta="Login"
            />
        </form>
    </main>

    <x-auth.footer/>
</div>
