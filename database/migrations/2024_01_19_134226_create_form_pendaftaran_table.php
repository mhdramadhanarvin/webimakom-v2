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
        Schema::create('form_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim')->nullable();
            $table->string('nomor_wa');
            $table->string('email');

            $table->string('nama_player_1');
            $table->string('nickname_player_1');
            $table->string('id_player_1');

            $table->string('nama_player_2')->nullable();
            $table->string('nickname_player_2')->nullable();
            $table->string('id_player_2')->nullable();

            $table->string('nama_player_3')->nullable();
            $table->string('nickname_player_3')->nullable();
            $table->string('id_player_3')->nullable();

            $table->string('nama_player_4')->nullable();
            $table->string('nickname_player_4')->nullable();
            $table->string('id_player_4')->nullable();

            $table->string('nama_player_5')->nullable();
            $table->string('nickname_player_5')->nullable();
            $table->string('id_player_5')->nullable();

            $table->string('nama_player_6')->nullable();
            $table->string('nickname_player_6')->nullable();
            $table->string('id_player_6')->nullable();

            $table->string('pdf_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pendaftaran');
    }
};
