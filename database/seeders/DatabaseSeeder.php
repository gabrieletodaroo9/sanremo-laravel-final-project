<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EditionsTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(AwardsTableSeeder::class);
        $this->call(ArtistSongTableSeeder::class);
        $this->call(AwardSongTableSeeder::class);
    }
}
