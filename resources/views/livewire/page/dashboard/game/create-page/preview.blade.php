@php
use App\Enums\Board\JoinFeeType\JoinFeeType;
use App\Enums\Board\GameSpeedType\GameSpeedType;
use App\Enums\Board\GameRoundsType\GameRoundsType;
use App\Enums\Board\GameType\GameType;
use App\Enums\Board\OpponentType\OpponentType;
@endphp

<div class="flex flex-col gap-4 w-full max-w-xs">
    <h2>
        Your game will create with this config
    </h2>
    <div class="flex flex-col gap-6">
        <div class="w-full h-px bg-white/10"></div>
        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Host</h3>
            <div class="flex gap-4">
                <div>
                    <div class="rounded-full p-0.5 ring-2 ring-success-300">
                        <div class="rounded-full w-12 h-12 overflow-hidden">
                            <img
                                src="{{ auth()->user()->avatar }}"
                                alt="{{ auth()->user()->display_name }}'s avatar"
                                class="w-full h-full object-center object-cover"
                            >
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <p>{{ auth()->user()->display_name }}</p>
                    <p class="flex gap-2 items-center">
                        Plays randomly
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Opponent</h3>
            <div class="flex gap-4">
                <div>
                    <div class="rounded-full p-0.5 ring-2 ring-danger-400">
                        <div class="rounded-full w-12 h-12 flex items-center justify-center overflow-hidden bg-secondary-100/5">
                            <span class="text-2xl font-bold plaza-sans">?</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <p>
                        @php
                            if (isset($config_data[OpponentType::identifier()]))
                            {
                                echo OpponentType::tryFrom($config_data[OpponentType::identifier()]) === OpponentType::Computer
                                ? __('Computer')
                                : __('Someone');
                            }
                            else
                            {
                                echo __('Not Set');
                            }
                        @endphp
                    </p>
                    <p class="flex gap-2 items-center">
                        Plays randomly
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Game Type</h3>
            <p class="text-white">
                {{
                    isset($config_data[GameType::identifier()])
                    ? GameType::tryFrom($config_data[GameType::identifier()])->label()
                    : __('Not Set')
                }}
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Join Fee (Bet)</h3>
            <p class="text-white">
                <span>
                    {{
                        isset($config_data[JoinFeeType::identifier()])
                        ? JoinFeeType::tryFrom($config_data[JoinFeeType::identifier()])->label()
                        : __('Not Set')
                    }}
                </span>
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Game Speed</h3>
            <p class="text-white">
                {{
                    isset($config_data[GameSpeedType::identifier()])
                    ? GameSpeedType::tryFrom($config_data[GameSpeedType::identifier()])->label()
                    : __('Not Set')
                }}
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium plaza-sans">Game Rounds</h3>
            <p class="text-white">
                {{
                    isset($config_data[GameRoundsType::identifier()])
                    ? GameRoundsType::tryFrom($config_data[GameRoundsType::identifier()])->label()
                    : __('Not Set')
                }}
            </p>
        </div>
    </div>
    <button wire:click.prevent="create" class="bg-primary-600 px-4 py-2 rounded-lg flex items-center justify-center plaza-sans uppercase hover:bg-primary-500 animate">
        Create
    </button>
</div>
