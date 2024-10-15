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
    Schema::create('performances', function (Blueprint $table) {
        $table->id('performance_id');
        $table->foreignId('event_id')->constrained()->onDelete('cascade');
        $table->foreignId('musician_id')->constrained()->onDelete('cascade');
        $table->string('composer');
        $table->string('piece');
        $table->time('duration');
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
