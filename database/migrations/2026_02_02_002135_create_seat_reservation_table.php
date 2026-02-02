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
        Schema::create('seat_reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->constrained('programme')->onDelete('cascade');
            $table->foreignId('segment_id')->constrained('segment')->onDelete('cascade');
            $table->foreignId('seat_id')->constrained('seat')->onDelete('cascade');
            $table->unique(['programme_id', 'segment_id', 'seat_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_reservation');
    }
};
