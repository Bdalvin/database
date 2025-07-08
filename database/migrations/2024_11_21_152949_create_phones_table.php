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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the commenter
            $table->string('department'); // Department of the commenter
            $table->string('extension')->nullable(); // Extension number, nullable
            $table->foreignId('user_id') // Foreign key to track the user who made the entry
                  ->constrained('users') // Links to the users table
                  ->onDelete('cascade'); // Deletes phone records if the user is deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
