<?php

namespace Database\Factories;

use App\Models\SiteImage;
use App\Models\SiteLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'site_image_id' => SiteImage::inRandomOrder()->value('id'),
            'name' => fake()->words(2, true).' airsoft',
            'description' => 'A passionate airsoft club dedicated to providing a safe, friendly, and thrilling environment for players of all skill levels to engage in realistic tactical battles and build lasting friendships.',
            'site_location_id' => SiteLocation::inRandomOrder()->value('id'),
            'address' => fake()->address(),
            'postcode' => fake()->postcode(),
        ];
    }
}
