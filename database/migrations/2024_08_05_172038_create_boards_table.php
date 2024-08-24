<?php

use App\Enums\Board\GameStatus\GameStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('host_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('opponent_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('status')->default(GameStatus::Waiting->key());
            $table->string('winner')->nullable();
            $table->string('opponent_type');
            $table->string('game_type');
            $table->string('join_fee')->nullable();
            $table->integer('join_fee_numeric')->nullable();
            $table->string('speed');
            $table->string('rounds');
            $table->integer('rounds_numeric');
            $table->integer('current_round')->default(1);
            $table->integer('host_bank');
            $table->integer('opponent_bank');
            $table->integer('round_bank');
            $table->boolean('is_host_play_first');
            $table->string('turn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
