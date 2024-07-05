<div class="flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <div class="relative max-w-fit">
            <h1 class="font-bold plaza-sans text-3xl">
                Games
            </h1>
            <span class="absolute -top-2 -right-7 text-sm">
                    Live
                </span>
        </div>

        <button class="px-4 py-2 rounded-lg bg-primary-600 animate hover:bg-primary-500">
            New Game
        </button>
    </div>

    <div class="grid grid-cols-4 gap-8">
        <x-dashboard.stat.card.simple
            title="Total Plays"
            amount="0"
            suffix="plays"
        />

        <x-dashboard.stat.card.simple
            title="Online Players"
            amount="0"
            suffix="players"
        />

        <x-dashboard.stat.card.simple
            title="Total Bet"
            amount="0"
            suffix="coins"
        />

        <x-dashboard.stat.card.simple
            title="Available Boards"
            amount="0"
            suffix="boards"
        />
    </div>

    <div class="flex flex-col gap-4">
        <h4>Live Games</h4>
        <div class="rounded-lg w-full bg-secondary-900 border border-secondary-800 overflow-hidden">
            <!-- Heading -->
            <div class="px-4 py-4 flex items-center justify-between">
                <div></div>
                <x-form.input
                    icon="hashtag"
                    placeholder="Enter game code"
                    icon-classes="w-5 h-5"
                />
            </div>

            <!-- Titles -->
            <div class="relative divide-y divide-gray-200 overflow-x-auto divide-white/10 border-t-white/10">
                <table class="w-full divide-y divide-white/5">
                    <thead>
                    <tr class="bg-white/5 *:text-left *:px-4 *:py-3 *:whitespace-nowrap">
                        <th>Code</th>
                        <th>Host</th>
                        <th>Type</th>
                        <th>Rounds</th>
                        <th>Speed</th>
                        <th>Bet</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5 *:*:py-3 *:*:px-4 *:text-left text-left">
                    <tr class="hover:bg-white/5 animate text-center">
                        <td class="">#0002010</td>
                        <td class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full overflow-hidden bg-secondary-800">
                                <img
                                    src="/src/images/cover.png"
                                    alt=""
                                    class="w-full h-full object-center object-cover"
                                >
                            </div>
                            <p>Jonathan Doe</p>
                        </td>
                        <td>
                            <div class="flex gap-2 items-center text-primary-300 bg-primary-600/10 max-w-fit px-2 py-1.5 rounded-lg text-sm border border-primary-500/30">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 5C13 6.10457 10.5376 7 7.5 7C4.46243 7 2 6.10457 2 5M13 5C13 3.89543 10.5376 3 7.5 3C4.46243 3 2 3.89543 2 5M13 5V6.5M2 5V17C2 18.1046 4.46243 19 7.5 19M7.5 11C7.33145 11 7.16468 10.9972 7 10.9918C4.19675 10.9 2 10.0433 2 9M7.5 15C4.46243 15 2 14.1046 2 13M22 11.5C22 12.6046 19.5376 13.5 16.5 13.5C13.4624 13.5 11 12.6046 11 11.5M22 11.5C22 10.3954 19.5376 9.5 16.5 9.5C13.4624 9.5 11 10.3954 11 11.5M22 11.5V19C22 20.1046 19.5376 21 16.5 21C13.4624 21 11 20.1046 11 19V11.5M22 15.25C22 16.3546 19.5376 17.25 16.5 17.25C13.4624 17.25 11 16.3546 11 15.25"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>
                                    Gamble
                                </span>
                            </div>
                        </td>
                        <td class="">3 rounds</td>
                        <td class="">Fast (15 seconds)</td>
                        <td class="text-warning-300">50 coins</td>
                        <td>
                            <button class="flex items-center gap-2 text-primary-400 group disabled:grayscale hover:underline disabled:hover:no-underline">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 2L4.09344 12.6879C3.74463 13.1064 3.57023 13.3157 3.56756 13.4925C3.56524 13.6461 3.63372 13.7923 3.75324 13.8889C3.89073 14 4.16316 14 4.70802 14H12L11 22L19.9065 11.3121C20.2553 10.8936 20.4297 10.6843 20.4324 10.5075C20.4347 10.3539 20.3663 10.2077 20.2467 10.1111C20.1092 10 19.8368 10 19.292 10H12L13 2Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Join</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/5 animate text-center">
                        <td class="">#0002015</td>
                        <td class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full overflow-hidden bg-secondary-800">
                                <img
                                    src="/src/images/cover.png"
                                    alt=""
                                    class="w-full h-full object-center object-cover"
                                >
                            </div>
                            <p>John Doe</p>
                        </td>
                        <td>
                            <div class="flex gap-2 items-center text-success-300 bg-success-600/10 max-w-fit px-2 py-1.5 rounded-lg text-sm border border-success-500/30">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 5C13 6.10457 10.5376 7 7.5 7C4.46243 7 2 6.10457 2 5M13 5C13 3.89543 10.5376 3 7.5 3C4.46243 3 2 3.89543 2 5M13 5V6.5M2 5V17C2 18.1046 4.46243 19 7.5 19M7.5 11C7.33145 11 7.16468 10.9972 7 10.9918C4.19675 10.9 2 10.0433 2 9M7.5 15C4.46243 15 2 14.1046 2 13M22 11.5C22 12.6046 19.5376 13.5 16.5 13.5C13.4624 13.5 11 12.6046 11 11.5M22 11.5C22 10.3954 19.5376 9.5 16.5 9.5C13.4624 9.5 11 10.3954 11 11.5M22 11.5V19C22 20.1046 19.5376 21 16.5 21C13.4624 21 11 20.1046 11 19V11.5M22 15.25C22 16.3546 19.5376 17.25 16.5 17.25C13.4624 17.25 11 16.3546 11 15.25"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>
                                    Freemium
                                </span>
                            </div>
                        </td>
                        <td class="">3 rounds</td>
                        <td class="">Fast (15 seconds)</td>
                        <td class="text-success-400">Free</td>
                        <td>
                            <button class="flex items-center gap-2 text-primary-400 group disabled:grayscale hover:underline disabled:hover:no-underline">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 2L4.09344 12.6879C3.74463 13.1064 3.57023 13.3157 3.56756 13.4925C3.56524 13.6461 3.63372 13.7923 3.75324 13.8889C3.89073 14 4.16316 14 4.70802 14H12L11 22L19.9065 11.3121C20.2553 10.8936 20.4297 10.6843 20.4324 10.5075C20.4347 10.3539 20.3663 10.2077 20.2467 10.1111C20.1092 10 19.8368 10 19.292 10H12L13 2Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Join</span>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
