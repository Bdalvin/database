<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthdaysTable extends Migration
{
    public function up()
    {
        Schema::create('birthdays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for the user
            $table->string('name'); // Name of the person whose birthday it is
            $table->date('birth_date'); // Birth date
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('birthdays', function (Blueprint $table) {
            // Drop foreign key before dropping the table
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('birthdays');
    }
}
