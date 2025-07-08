<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for the user
            $table->string('title'); // Title of the notice
            $table->text('content'); // Content of the notice
            $table->date('date'); // Date of the notice
            $table->string('image')->nullable(); // Image path or URL, nullable
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('notices', function (Blueprint $table) {
            // Drop foreign key before dropping the table
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('notices');
    }
}

