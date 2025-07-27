<?php

namespace Database\Seeders;

use App\Models\SiteLocation;
use Illuminate\Database\Seeder;

class SiteLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            'Amsterdam' => ['latitude' => 52.370216, 'longitude' => 4.895168],
            'Rotterdam' => ['latitude' => 51.9225, 'longitude' => 4.47917],
            'Utrecht' => ['latitude' => 52.090737, 'longitude' => 5.12142],
            'Eindhoven' => ['latitude' => 51.441642, 'longitude' => 5.469722],
        ];

        foreach ($locations as $key => $value) {
            SiteLocation::create([
                'name' => $key,
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude'],
            ]);
        }

    }
}
