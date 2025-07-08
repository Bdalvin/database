<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContributionType;

class ContributionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define your contribution types
        $contributionTypes = [
            ['name' => 'Monthly Contribution'],
            ['name' => 'One-time Donation'],
            ['name' => 'Event Sponsorship'],
            ['name' => 'Fundraising'],
            ['name' => 'In-Kind Contribution'],
        ];

        // Insert contribution types into the database
        foreach ($contributionTypes as $type) {
            ContributionType::create($type);
        }
    }
}
