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
            $table->string('proof_of_payment')->nullable();
            $table->string('reason')->nullable();
            $table->enum('status', ['waiting_confirmation', 'approved', 'rejected'])->default('waiting_confirmation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pekan_esports', function (Blueprint $table) {
            $table->dropColumn(['proof_of_payment', 'reason', 'status']);
        });
    }
};
