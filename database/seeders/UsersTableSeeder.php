<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gabriele Todaro',
                'email' => 'gabrieletodaro@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$xVyThbg9hsprPhshYTnY9.oEeFal9/H.0qYN8AJnocpUIKQ/vuu.O',
                'remember_token' => 'KVXctJjwQo5FIYmXbgXnkfT2sqnsDOcVSWne5SAUZdGPDRhJ3LGZGbKPrBiv',
                'created_at' => '2026-03-04 14:16:08',
                'updated_at' => '2026-03-04 14:28:41',
            ),
        ));
        
        
    }
}