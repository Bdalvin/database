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
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Event title
            $table->date('date'); // Date of the event
            $table->time('start_time'); // Start time of the event
            $table->time('end_time'); // End time of the event
            $table->string('organizers'); // Organizers of the event
            $table->string('venue'); // Venue of the event
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who added the event
            $table->softDeletes(); // Soft delete column
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
