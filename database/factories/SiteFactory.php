<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\SiteImage;
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
            'name' => fake()->words(2, true).'airsoft',
            'location' => Location::inRandomOrder()->value('id'),
            'address' => fake()->address(),
            'postcode' => fake()->postcode(),
        ];
    }
}
