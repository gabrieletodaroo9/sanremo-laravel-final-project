<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('awards')->delete();
        
        DB::table('awards')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Premio della Critica \'Mia Martini\'',
                'created_at' => '2026-03-06 14:37:20',
                'updated_at' => '2026-03-06 15:57:51',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Sala Stampa “Lucio Dalla”',
                'created_at' => '2026-03-06 15:25:07',
                'updated_at' => '2026-03-06 15:58:10',
            ),
            2 => 
            array (
                'id' => 4,
            'name' => '“Sergio Bardotti” (testo)',
                'created_at' => '2026-03-06 15:25:33',
                'updated_at' => '2026-03-06 15:57:56',
            ),
            3 => 
            array (
                'id' => 5,
            'name' => '“Giancarlo Bigazzi” (musica)',
                'created_at' => '2026-03-06 15:25:42',
                'updated_at' => '2026-03-06 15:58:02',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Premio TIM',
                'created_at' => '2026-03-06 15:26:13',
                'updated_at' => '2026-03-06 16:00:48',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Vincitore Festival di Sanremo',
                'created_at' => '2026-03-06 15:46:00',
                'updated_at' => '2026-03-06 15:57:37',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Premio Lunezia',
                'created_at' => '2026-03-06 16:00:12',
                'updated_at' => '2026-03-06 16:00:12',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Premio "Enzo Jannacci"',
                'created_at' => '2026-03-06 20:43:21',
                'updated_at' => '2026-03-06 20:43:21',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Premio "CoReCom"',
                'created_at' => '2026-03-06 20:43:55',
                'updated_at' => '2026-03-06 20:43:55',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Premio Assomusica',
                'created_at' => '2026-03-06 20:44:07',
                'updated_at' => '2026-03-06 20:44:07',
            ),
            10 => 
            array (
                'id' => 13,
            'name' => 'SoundiesAwards (miglior videoclip)',
                'created_at' => '2026-03-06 23:12:30',
                'updated_at' => '2026-03-06 23:12:30',
            ),
        ));
        
        
    }
}