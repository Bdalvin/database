<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailToBirthdaysTable extends Migration
{
    public function up()
    {
        Schema::table('birthdays', function (Blueprint $table) {
            $table->string('email')->nullable(); // Add email column
        });
    }

    public function down()
    {
        Schema::table('birthdays', function (Blueprint $table) {
            $table->dropColumn('email'); // Remove email column if migration is rolled back
        });
    }
}
