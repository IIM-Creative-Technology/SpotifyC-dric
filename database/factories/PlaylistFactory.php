<?php

namespace Database\Factories;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playlist>
 */
class PlaylistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->name(),
            'description'=> $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'is_public'=> $this->faker->boolean(),
            'artiste_id' => User::all()->random()->id
        ];
    }
}
