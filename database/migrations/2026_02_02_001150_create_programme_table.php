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
        Schema::create('programme', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')->constrained('route')->onDelete('cascade');
            $table->foreignId('bus_id')->constrained('bus')->onDelete('cascade');
            $table->date('travel_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programme');
    }
};
