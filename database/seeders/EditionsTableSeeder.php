<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EditionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('editions')->delete();
        
        DB::table('editions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'year' => 2026,
                'host' => 'Carlo Conti',
                'co_hosts' => 'Laura Pausini, Can Yaman, Pilar Fogliati, Achille Lauro, Lillo, Irina Shayk, Ubaldo Pantani, Gianluca Gazzoli, Bianca Balti, Alessandro Siani, Giorgia Cardinaletti e Nino Frassica.',
                'location' => 'Teatro Ariston',
                'logo_url' => 'editions/logos/3m93LIDmHENXOmP6WvCdi76qn557hWriniRaSEye.png',
                'created_at' => '2026-03-04 20:41:10',
                'updated_at' => '2026-03-04 21:24:30',
            ),
            1 => 
            array (
                'id' => 4,
                'year' => 2025,
                'host' => 'Carlo Conti',
                'co_hosts' => 'Alessandro Cattelan, Alessia Marcuzzi, Mahmood, Nino Frassica, Elettra Lamborghini, Miriam Leone, Bianca Balti, Geppi Cucciari, Katia Follesa, Gerry Scotti e Antonella Clerici.',
                'location' => 'Teatro Ariston',
                'logo_url' => 'editions/logos/N7ma0CnytIjmn3RcpD20510pPLbLQJ2DBmAQUZVv.png',
                'created_at' => '2026-03-04 21:03:00',
                'updated_at' => '2026-03-04 21:05:35',
            ),
            2 => 
            array (
                'id' => 5,
                'year' => 2024,
                'host' => 'Amadeus',
                'co_hosts' => 'Marco Mengoni, Giorgia, Teresa Mannino, Lorella Cuccarini e Fiorello.',
                'location' => 'Teatro Ariston',
                'logo_url' => 'editions/logos/qvvJokZe1hGHlWlJKnK7yMG50gvkZIcHJ4IQQ3L6.png',
                'created_at' => '2026-03-04 21:24:02',
                'updated_at' => '2026-03-04 21:25:55',
            ),
            3 => 
            array (
                'id' => 6,
                'year' => 2023,
                'host' => 'Amadeus',
                'co_hosts' => 'Gianni Morandi, Chiara Ferragni, Francesca Fagnani, Paola Egonu e Chiara Francini.',
                'location' => 'Teatro Ariston',
                'logo_url' => 'editions/logos/kg9vnobqecMkyJG0mUT5blZ8ruylzwwAaDQtKoRd.png',
                'created_at' => '2026-03-04 21:27:59',
                'updated_at' => '2026-03-05 00:35:24',
            ),
            4 => 
            array (
                'id' => 7,
                'year' => 2022,
                'host' => 'Amadeus',
                'co_hosts' => 'Ornella Muti, Lorena Cesarini, Drusilla Foer, Maria Chiara Giannetta e Sabrina Ferilli',
                'location' => 'Teatro Ariston',
                'logo_url' => 'editions/logos/BkyS6ZKItbgQVV5E8jlqNNGMBO7pDOzSVIvRCvBz.png',
                'created_at' => '2026-03-05 17:27:35',
                'updated_at' => '2026-03-05 17:27:35',
            ),
        ));
        
        
    }
}