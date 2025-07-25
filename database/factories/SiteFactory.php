<?php

namespace Database\Factories;

use App\Models\Company;
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
            'company_id' => Company::inRandomOrder()->value('id'),
            'name' => fake()->words(2, true).'airsoft',
            'location' => fake()->city(),
            'address' => fake()->address(),
            'postcode' => fake()->postcode(),
        ];
    }
}
