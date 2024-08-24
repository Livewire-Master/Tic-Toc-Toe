<?php

namespace App\Models;

use App\Enums\Board\Turn\Turn;
use Illuminate\Database\Eloquent\Model;

class BoardEvent extends Model
{
    protected $fillable = [
        'board_id',
        'round',
        'cell',
        'row',
        'col',
        'played_by',
    ];

    protected function casts(): array
    {
        return [
            'played_by' => Turn::class
        ];
    }
}
