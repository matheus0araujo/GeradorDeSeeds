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
        Schema::create('seed__logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seed_id')->constrained()->onDelete('cascade');
            $table->string('message');
            $table->float('match_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seed__logs');
    }
};
