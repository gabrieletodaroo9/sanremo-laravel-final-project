<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtistSongTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artist_song')->delete();
        
        \DB::table('artist_song')->insert(array (
            0 => 
            array (
                'id' => 1,
                'artist_id' => 9,
                'song_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'artist_id' => 8,
                'song_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'artist_id' => 1,
                'song_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}