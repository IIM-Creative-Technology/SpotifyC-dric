<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Artiste;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cover' => 'rrr',
            'nom'=> $this->faker->name,
            'artiste_id' => Artiste::all()->random()->id,
        ];
    }
}
