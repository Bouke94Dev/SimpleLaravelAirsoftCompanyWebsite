<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.pp
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GearSeeder::class,
            SiteImageSeeder::class,
            LocationSeeder::class,
            SiteSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
