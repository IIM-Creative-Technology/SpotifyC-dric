<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artiste;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Son>
 */
class SonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user = Artiste::whereHas('albums')->with('albums')->get()->random();

       return[
            'title' => $this->faker->title,
            'artiste_id' => $user->id,
            'album_id' => $this->faker->randomElement([$user->albums->random()->id,null])
       ];
    }
}
