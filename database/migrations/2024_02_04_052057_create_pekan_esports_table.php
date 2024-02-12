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
        Schema::create('pekan_esports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('cabors');
            $table->string('team_name');
            $table->string('email');
            $table->string('whatsapp_number');
            $table->string('player_name');
            $table->string('nickname_player');
            $table->string('id_player');
            $table->string('screenshot_profile_player');
            $table->string('identity_player');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekan_esports');
    }
};
