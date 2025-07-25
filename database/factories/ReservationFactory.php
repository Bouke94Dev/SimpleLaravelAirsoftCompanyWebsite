<?php

namespace Database\Factories;

use App\Models\Gear;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),   // haalt random bestaande user
            'site_id' => Site::inRandomOrder()->value('id'),   // idem voor site
            'gear_id' => Gear::inRandomOrder()->value('id'),   // idem voor gear
            'booking_date' => fake()->date(),
            'start_date' => fake()->dateTimeBetween('+1 day', '+2 weeks'),
            'player_amount' => fake()->numberBetween(8, 20),
            'note' => fake()->optional()->sentence(),
        ];
    }
}
