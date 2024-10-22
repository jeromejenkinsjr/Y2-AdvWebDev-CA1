<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->string('name'); // Column for event name
            $table->date('event_date'); // Column for event date
            $table->time('start_time'); // Column for start time
            $table->time('end_time'); // Column for end time
            $table->string('location'); // Column for event location
            $table->text('description')->nullable(); // Optional description of the event
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events'); // Drop the events table if it exists
    }
}