<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'first_name' => 'John',
            'second_name' => 'Doe',
            'gender' => 'Male',
            'role' => 'Manager',
            'department' => 'HR',
            'date_of_birth' => '1985-06-15',
            'level_of_education' => 'Degree',
            'year_joined' => 2010,
        ]);

        Employee::create([
            'first_name' => 'Jane',
            'second_name' => 'Smith',
            'gender' => 'Female',
            'role' => 'Developer',
            'department' => 'IT',
            'date_of_birth' => '1990-09-22',
            'level_of_education' => 'Masters',
            'year_joined' => 2015,
        ]);
    }
}
