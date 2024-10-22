<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('musicians', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->string('name'); // Example column for musician's name
            $table->string('instrument')->nullable(); // Example column for musician's instrument
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musicians');
    }
};
