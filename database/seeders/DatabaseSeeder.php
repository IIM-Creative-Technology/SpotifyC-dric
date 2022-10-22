<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Son;
use App\Models\User;
use App\Models\Album;
use App\Models\Artiste;
use App\Models\Playlist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        Artiste::truncate();
        Album::truncate();
        Son::truncate();
        Playlist::truncate();

        User::factory(10)->create();
        Artiste::factory(10)->create();
        Album::factory(20)->create();
        Son::factory(150)->create();
        Playlist::factory(10)->create();

        $songs = Son::all();
        foreach($songs as $song) {
            $song->playlist()->attach(Playlist::inRandomOrder()->limit(5)->get()->pluck('id'));
        };

        Schema::enableForeignKeyConstraints();
    }
}
