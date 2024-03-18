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
        Schema::table('pekan_esports', function (Blueprint $table) {
            $table->text('player_name')->change();
            $table->text('nickname_player')->change();
            $table->text('id_player')->change();
            $table->text('screenshot_profile_player')->change();
            $table->text('identity_player')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pekan_esports', function (Blueprint $table) {
            $table->string('player_name')->change();
            $table->string('nickname_player')->change();
            $table->string('id_player')->change();
            $table->string('screenshot_profile_player')->change();
            $table->string('identity_player')->change();
        });
    }
};
