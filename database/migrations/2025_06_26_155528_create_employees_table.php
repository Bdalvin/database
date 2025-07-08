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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->enum('gender', ['Male', 'Female']); // Gender field
            $table->enum('role', ['Manager', 'Member']); // Restricted role options
            $table->enum('department', [ // Restricted department options
                'E-health',
                'IT outsource',
                'Digital learning',
                'Data science',
                'IOT',
                'Ibizafrica',
                'IR&EE',
                'PR',
                'IT support'
            ]);
            $table->date('date_of_birth');
            $table->enum('level_of_education', ['Degree', 'Masters', 'PhD', 'Diploma']);
            $table->year('year_joined');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
