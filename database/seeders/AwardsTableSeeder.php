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
        ));
        
        
    }
}