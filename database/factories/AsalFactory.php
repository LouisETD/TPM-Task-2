<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asal>
 */
class AsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // // 'id' => asal::factory(),
            // 'asal_makanan' => fake()->name(),
            // 'belahan_dunia' => fake()->name(),
        ];
    }
}
