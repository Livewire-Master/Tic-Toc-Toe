<?php

namespace App\Livewire\Page\Dashboard\Game;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('New Game')]
class CreatePage extends Component
{
    public string $selected_join_fee = '';

    public function selectJoinFee(string $key)
    {
        $this->selected_join_fee = $key;
    }

    /**
     * Get the join fee options
     */
    #[Computed]
    public function joinFeeOptions(): array
    {
        return [
            [
                'key' => '5',
                'label' => '5 Coins',
                'color' => 'success',
            ],
            [
                'key' => '10',
                'label' => '10 Coins',
                'color' => 'accent',
            ],
            [
                'key' => '25',
                'label' => '25 Coins',
                'color' => 'info',
            ],
            [
                'key' => '50',
                'label' => '50 Coins',
                'color' => 'warning',
            ],
            [
                'key' => 'all-in',
                'label' => 'All-in',
                'color' => 'danger',
            ],
        ];
    }
}
