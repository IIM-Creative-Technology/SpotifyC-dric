<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artiste>
 */
class ArtisteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'style' => $this->faker->randomElement(['RAP', 'ROCK', 'POP', 'ELECTRO', 'RNB', 'JAZZ', 'METAL']),
            'birthdate' => $this->faker->date()
        ];
    }
}
