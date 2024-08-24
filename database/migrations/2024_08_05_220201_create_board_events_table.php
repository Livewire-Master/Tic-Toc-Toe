<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('board_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('board_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('round');
            $table->string('cell'); // 1x2
            $table->integer('row'); // 1
            $table->integer('col'); // 2
            $table->string('played_by'); // host, opponent
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_events');
    }
};
