<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusiciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicians', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the musician
            $table->string('type'); // Type of musician (e.g., solo artist, orchestra)
            $table->date('date_of_birth'); // Date of birth
            $table->string('nationality'); // Nationality
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicians'); // Drop the musicians table if it exists
    }
}