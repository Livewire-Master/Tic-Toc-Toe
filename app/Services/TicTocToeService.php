<?php

namespace App\Services;

class TicTocToeService
{
    private $board;
    private $size = 3;

    public function __construct()
    {
        $this->initializeBoard();
    }

    private function initializeBoard()
    {
        $this->board = [];
        for ($i = 1; $i <= $this->size; $i++) {
            for ($j = 1; $j <= $this->size; $j++) {
                $this->board["$i" . "x" . "$j"] = [
                    'location' => "$i" . "x" . "$j",
                    'is_played' => false,
                    'played_by' => null,
                    'played_at' => null,
                ];
            }
        }
    }

    public function getBoard()
    {
        return $this->board;
    }

    public function playMove($location, $player)
    {
        if ($this->board[$location]['is_played'] === false) {
            $this->board[$location]['is_played'] = true;
            $this->board[$location]['played_by'] = $player;
            $this->board[$location]['played_at'] = date('Y-m-d H:i:s');
            return true;
        }
        return false;
    }

    public function undoMove($location)
    {
        if ($this->board[$location]['is_played'] === true) {
            $this->board[$location]['is_played'] = false;
            $this->board[$location]['played_by'] = null;
            $this->board[$location]['played_at'] = null;
            return true;
        }
        return false;
    }

    public function clearBoard()
    {
        $this->initializeBoard();
    }

    public function checkWin($player)
    {
        $winningConditions = [
            // Rows
            ['1x1', '1x2', '1x3'],
            ['2x1', '2x2', '2x3'],
            ['3x1', '3x2', '3x3'],
            // Columns
            ['1x1', '2x1', '3x1'],
            ['1x2', '2x2', '3x2'],
            ['1x3', '2x3', '3x3'],
            // Diagonals
            ['1x1', '2x2', '3x3'],
            ['1x3', '2x2', '3x1']
        ];

        foreach ($winningConditions as $condition) {
            if ($this->board[$condition[0]]['played_by'] === $player &&
                $this->board[$condition[1]]['played_by'] === $player &&
                $this->board[$condition[2]]['played_by'] === $player) {
                return true;
            }
        }

        return false;
    }

    public function isBoardFull()
    {
        foreach ($this->board as $cell) {
            if (!$cell['is_played']) {
                return false;
            }
        }
        return true;
    }

    private function minimax($isMaximizing, $depth = 0)
    {
        if ($this->checkWin('p1')) {
            return -10 + $depth; // less negative for deeper wins
        }
        if ($this->checkWin('p2')) {
            return 10 - $depth; // less positive for deeper wins
        }
        if ($this->isBoardFull()) {
            return 0;
        }

        if ($isMaximizing) {
            $bestScore = -INF;
            foreach ($this->board as $location => $cell) {
                if (!$cell['is_played']) {
                    $this->playMove($location, 'p2');
                    $score = $this->minimax(false, $depth + 1);
                    $this->undoMove($location); // use undoMove method to revert the move
                    $bestScore = max($score, $bestScore);
                }
            }
            return $bestScore;
        } else {
            $bestScore = INF;
            foreach ($this->board as $location => $cell) {
                if (!$cell['is_played']) {
                    $this->playMove($location, 'p1');
                    $score = $this->minimax(true, $depth + 1);
                    $this->undoMove($location); // use undoMove method to revert the move
                    $bestScore = min($score, $bestScore);
                }
            }
            return $bestScore;
        }
    }

    private function hasWinningMove($player)
    {
        foreach ($this->board as $location => $cell) {
            if (!$cell['is_played']) {
                $this->playMove($location, $player);
                if ($this->checkWin($player)) {
                    $this->undoMove($location); // use undoMove method to revert the move
                    return $location;
                }
                $this->undoMove($location); // use undoMove method to revert the move
            }
        }
        return false;
    }

    public function suggestNextMove($player)
    {
        // Check for immediate winning move
        $winningMove = $this->hasWinningMove($player);
        if ($winningMove) {
            return $winningMove;
        }

        // Check for blocking opponent's winning move
        $opponent = $player === 'p1' ? 'p2' : 'p1';
        $blockingMove = $this->hasWinningMove($opponent);
        if ($blockingMove) {
            return $blockingMove;
        }

        // Use Minimax for other moves
        $bestScore = -INF;
        $bestMove = null;

        foreach ($this->board as $location => $cell) {
            if (!$cell['is_played']) {
                $this->playMove($location, $player);
                $score = $this->minimax($player === 'p1' ? false : true);
                $this->undoMove($location); // use undoMove method to revert the move
                if ($score > $bestScore) {
                    $bestScore = $score;
                    $bestMove = $location;
                }
            }
        }

        return $bestMove;
    }
}
