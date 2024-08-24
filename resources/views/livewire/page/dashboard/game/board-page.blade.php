<div class="col-span-7 flex flex-col gap-8" wire:poll.keep-alive.100ms>
    <div class="flex items-center justify-between">
        <div class="relative max-w-fit">
            <h1 class="font-bold plaza-sans text-3xl">
                Board
            </h1>
            <span class="absolute -top-2 -right-7 text-sm">
                    Live
                </span>
        </div>

        <div class="flex items-center gap-4">
            <button class="px-4 py-2 rounded-lg animate text-info-400 hover:text-info-300 flex gap-2 items-center">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Rules</span>
            </button>

            @if($board->status === \App\Enums\Board\GameStatus\GameStatus::Playing)
            <button class="px-4 py-2 rounded-lg bg-danger-600 animate hover:bg-danger-500 flex gap-2 items-center">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.1111 6.72217H20.1404C20.5877 6.72217 20.8114 6.72217 20.9422 6.81621C21.0563 6.89826 21.1306 7.02456 21.1469 7.16416C21.1656 7.32417 21.057 7.51967 20.8398 7.91068L19.3702 10.5559C19.2914 10.6977 19.252 10.7686 19.2366 10.8437C19.2229 10.9101 19.2229 10.9787 19.2366 11.0451C19.252 11.1202 19.2914 11.1911 19.3702 11.3329L20.8398 13.9781C21.057 14.3691 21.1656 14.5646 21.1469 14.7246C21.1306 14.8642 21.0563 14.9905 20.9422 15.0726C20.8114 15.1666 20.5877 15.1666 20.1404 15.1666H12.5445C11.9844 15.1666 11.7044 15.1666 11.4905 15.0576C11.3023 14.9617 11.1493 14.8088 11.0535 14.6206C10.9445 14.4067 10.9445 14.1267 10.9445 13.5666V10.9444M7.25004 21.5002L3.02782 4.61133M4.6112 10.9444H12.5112C13.0712 10.9444 13.3512 10.9444 13.5651 10.8355C13.7533 10.7396 13.9063 10.5866 14.0022 10.3984C14.1112 10.1845 14.1112 9.9045 14.1112 9.34445V4.1C14.1112 3.53995 14.1112 3.25992 14.0022 3.04601C13.9063 2.85785 13.7533 2.70487 13.5651 2.60899C13.3512 2.5 13.0712 2.5 12.5112 2.5H4.54927C3.85075 2.5 3.50149 2.5 3.2626 2.64474C3.05323 2.77159 2.89767 2.97084 2.82538 3.20472C2.74291 3.47158 2.82762 3.81041 2.99704 4.48807L4.6112 10.9444Z"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Resign</span>
            </button>
            @endif
        </div>
    </div>

    <div class="flex items-start justify-between gap-32">
        <div class="flex flex-col gap-4">
            <div class="grid grid-cols-3 gap-4 rounded-lg overflow-hidden p-4 ring ring-secondary-800/50">
                @for($row = 1; $row <= 3; $row++)
                    @for($col = 1; $col <= 3; $col++)
                        <div wire:click.prevent="play({{ $row }}, {{ $col }})" class="w-20 h-20 rounded-lg bg-secondary-50/5 hover:bg-secondary-700/50 animate cursor-pointer flex items-center justify-center">
                            @if(isset($this->plays[$row . 'x' . $col]))
                                @if(($this->plays[$row . 'x' . $col]['played_by']) == $this->me->value)
                                    <x-dynamic-component component="game.board.{{ $this->myItem }}"/>
                                @else
                                    <x-dynamic-component component="game.board.{{ $this->opItem }}"/>
                                @endif
                            @endif
                        </div>
                    @endfor
                @endfor
            </div>
            @if($board->status === \App\Enums\Board\GameStatus\GameStatus::Playing)
                <div>
                    @if($board->turn === \App\Enums\Board\Turn\Turn::Host)
                        @if($this->me === \App\Enums\Board\Turn\Turn::Host)
                            <div class="w-full bg-success-500 px-4 py-2 rounded-lg plaza-sans text-center text-md">
                                YOUR TURN
                            </div>
                        @else
                            <div class="w-full bg-warning-500 px-4 py-2 rounded-lg plaza-sans text-center text-md">
                                OPPONENT TURN
                            </div>
                        @endif
                    @elseif($board->turn === \App\Enums\Board\Turn\Turn::Opponent)
                        @if($this->me === \App\Enums\Board\Turn\Turn::Opponent)
                            <div class="w-full bg-success-500 px-4 py-2 rounded-lg plaza-sans text-center text-md">
                                YOUR TURN
                            </div>
                        @else
                            <div class="w-full bg-warning-500 px-4 py-2 rounded-lg plaza-sans text-center text-md">
                                OPPONENT TURN
                            </div>
                        @endif
                    @endif
                </div>
                <div class="w-full flex items-center justify-center">
                    00:30 seconds left
                </div>
            @endif
        </div>
        <div class="grow flex flex-col justify-start gap-8 h-full">
            <div class="grid grid-cols-3 gap-8">
                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Your Time
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        @if($board->host_id === auth()->id())
                            <span>{{ $board->host_bank }}</span>
                        @else
                            <span>{{ $board->opponent_bank }}</span>
                        @endif
                        <span class="text-sm font-medium">seconds left</span>
                    </p>
                </div>

                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Opponent Time
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        @if($board->host_id === auth()->id())
                            <span>{{ $board->opponent_bank }}</span>
                        @else
                            <span>{{ $board->host_bank }}</span>
                        @endif
                        <span class="text-sm font-medium">seconds left</span>
                    </p>
                </div>

                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Total Bet
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        @if($board->game_type === \App\Enums\Board\GameType\GameType::Gamble)
                            50
                            <span class="text-sm font-medium">coins</span>
                        @else
                            Free
                        @endif
                    </p>
                </div>

                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Total Rounds
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        <span>{{ $board->rounds_numeric }}</span>
                        <span class="text-sm font-medium">rounds</span>
                    </p>
                </div>

                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Current Round
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        <span>{{ $board->current_round }}</span>
                        <span class="text-sm font-medium">round</span>
                    </p>
                </div>

                <div class="bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4">
                    <h3 class="text-lg">
                        Winner
                    </h3>
                    <p class="text-4xl font-bold plaza-sans">
                        <span>{{ $board->winner ?? 'waiting' }}</span>
                        <span class="text-sm font-medium">won</span>
                    </p>
                </div>
            </div>

            @if($board->opponent_id)
                <div class="flex flex-col gap-4">
                    <div class="flex items-start justify-between">
                        <div class="flex gap-4">
                            <div>
                                <div class="rounded-full p-0.5 ring-2 ring-primary-400">
                                    <div class="rounded-full w-12 h-12 overflow-hidden">
                                        <img
                                            src="{{ $board->is_host_play_first ? $board->host->avatar : $board->opponent->avatar }}"
                                            alt=""
                                            class="w-full h-full object-center object-cover"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="flex gap-1.5">
                                    <span>{{ $board->is_host_play_first ? $board->host->display_name : $board->opponent->display_name }}</span>
                                    @if($board->is_host_play_first && $board->host_id === auth()->id())
                                        <span class="text-white text-xs font-black">you</span>
                                    @endif
                                </p>
                                <p class="flex gap-1 items-center">
                                    Plays with
                                    <svg class="w-6 h-6 text-primary-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 16.933 21.167">
                                        <path d="M32 9A23 23 0 0 0 9 32a23 23 0 0 0 23 23 23 23 0 0 0 23-23A23 23 0 0 0 32 9Zm0 11.225A11.775 11.775 0 0 1 43.775 32 11.775 11.775 0 0 1 32 43.775 11.775 11.775 0 0 1 20.225 32 11.775 11.775 0 0 1 32 20.225Z"
                                              transform="matrix(.26458 0 0 .26458 0 2.067)" fill="currentColor"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-px bg-white/10"></div>

                    <div class="flex items-start justify-between">
                        <div class="flex gap-4">
                            <div>
                                <div class="rounded-full p-0.5 ring-2 ring-warning-300">
                                    <div class="rounded-full w-12 h-12 overflow-hidden">
                                        <img
                                            src="{{ $board->is_host_play_first ? $board->opponent->avatar : $board->host->avatar }}"
                                            alt=""
                                            class="w-full h-full object-center object-cover"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="flex gap-1.5">
                                    <span>{{ $board->is_host_play_first ? $board->opponent->display_name : $board->host->display_name }}</span>
                                    @if($board->is_host_play_first && $board->opponent_id === auth()->id())
                                        <span class="text-white text-xs font-black">you</span>
                                    @endif
                                </p>
                                <p class="flex gap-2 items-center">
                                    Plays with
                                    <svg class="w-3.5 h-3.5 text-warning-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 847 850.75">
                                        <path fill="currentColor" d="M269 423 20 173 173 20l250 249L673 20l154 153-250 250 250 250-154 154-250-250-250 250L20 673z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
