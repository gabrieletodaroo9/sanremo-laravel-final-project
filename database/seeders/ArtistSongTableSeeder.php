<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSongTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('artist_song')->delete();
        
        DB::table('artist_song')->insert(array (
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
            3 => 
            array (
                'id' => 4,
                'artist_id' => 2,
                'song_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'artist_id' => 3,
                'song_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'artist_id' => 10,
                'song_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'artist_id' => 11,
                'song_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'artist_id' => 12,
                'song_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'artist_id' => 13,
                'song_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'artist_id' => 14,
                'song_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'artist_id' => 15,
                'song_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'artist_id' => 16,
                'song_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'artist_id' => 17,
                'song_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'artist_id' => 19,
                'song_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'artist_id' => 18,
                'song_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'artist_id' => 20,
                'song_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'artist_id' => 21,
                'song_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'artist_id' => 22,
                'song_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'artist_id' => 23,
                'song_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'artist_id' => 24,
                'song_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'artist_id' => 25,
                'song_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'artist_id' => 26,
                'song_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'artist_id' => 27,
                'song_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'artist_id' => 28,
                'song_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'artist_id' => 29,
                'song_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'artist_id' => 30,
                'song_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'artist_id' => 31,
                'song_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'artist_id' => 32,
                'song_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'artist_id' => 33,
                'song_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'artist_id' => 34,
                'song_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'artist_id' => 35,
                'song_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'artist_id' => 36,
                'song_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'artist_id' => 37,
                'song_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'artist_id' => 38,
                'song_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'artist_id' => 11,
                'song_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'artist_id' => 5,
                'song_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'artist_id' => 7,
                'song_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'artist_id' => 39,
                'song_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'artist_id' => 40,
                'song_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'artist_id' => 41,
                'song_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'artist_id' => 42,
                'song_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'artist_id' => 43,
                'song_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'artist_id' => 44,
                'song_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'artist_id' => 45,
                'song_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'artist_id' => 46,
                'song_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'artist_id' => 47,
                'song_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'artist_id' => 48,
                'song_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'artist_id' => 49,
                'song_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'artist_id' => 50,
                'song_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'artist_id' => 51,
                'song_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'artist_id' => 52,
                'song_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'artist_id' => 53,
                'song_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'artist_id' => 54,
                'song_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'artist_id' => 55,
                'song_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'artist_id' => 56,
                'song_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'artist_id' => 57,
                'song_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'artist_id' => 16,
                'song_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'artist_id' => 58,
                'song_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'artist_id' => 59,
                'song_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'artist_id' => 60,
                'song_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'artist_id' => 61,
                'song_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'artist_id' => 62,
                'song_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'artist_id' => 64,
                'song_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'artist_id' => 65,
                'song_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'artist_id' => 66,
                'song_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'artist_id' => 67,
                'song_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'artist_id' => 43,
                'song_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'artist_id' => 8,
                'song_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'artist_id' => 70,
                'song_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 71,
                'artist_id' => 71,
                'song_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 72,
                'artist_id' => 72,
                'song_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 73,
                'artist_id' => 73,
                'song_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 74,
                'artist_id' => 74,
                'song_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 75,
                'artist_id' => 75,
                'song_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 76,
                'artist_id' => 76,
                'song_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 77,
                'artist_id' => 77,
                'song_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 78,
                'artist_id' => 48,
                'song_id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 79,
                'artist_id' => 78,
                'song_id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 80,
                'artist_id' => 79,
                'song_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 81,
                'artist_id' => 80,
                'song_id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 82,
                'artist_id' => 35,
                'song_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 83,
                'artist_id' => 81,
                'song_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 84,
                'artist_id' => 82,
                'song_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 85,
                'artist_id' => 53,
                'song_id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 86,
                'artist_id' => 60,
                'song_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 87,
                'artist_id' => 31,
                'song_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 88,
                'artist_id' => 83,
                'song_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 89,
                'artist_id' => 84,
                'song_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 90,
                'artist_id' => 85,
                'song_id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 91,
                'artist_id' => 86,
                'song_id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 92,
                'artist_id' => 87,
                'song_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 93,
                'artist_id' => 88,
                'song_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 94,
                'artist_id' => 4,
                'song_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'artist_id' => 89,
                'song_id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'artist_id' => 90,
                'song_id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 98,
                'artist_id' => 78,
                'song_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 99,
                'artist_id' => 91,
                'song_id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 100,
                'artist_id' => 92,
                'song_id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 101,
                'artist_id' => 40,
                'song_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 102,
                'artist_id' => 93,
                'song_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 103,
                'artist_id' => 94,
                'song_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 104,
                'artist_id' => 46,
                'song_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 105,
                'artist_id' => 95,
                'song_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 106,
                'artist_id' => 56,
                'song_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 107,
                'artist_id' => 96,
                'song_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 108,
                'artist_id' => 44,
                'song_id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 109,
                'artist_id' => 97,
                'song_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 110,
                'artist_id' => 18,
                'song_id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 111,
                'artist_id' => 98,
                'song_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 112,
                'artist_id' => 99,
                'song_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 113,
                'artist_id' => 36,
                'song_id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 114,
                'artist_id' => 37,
                'song_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 115,
                'artist_id' => 100,
                'song_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 116,
                'artist_id' => 101,
                'song_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 117,
                'artist_id' => 102,
                'song_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 118,
                'artist_id' => 22,
                'song_id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 119,
                'artist_id' => 4,
                'song_id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120,
                'artist_id' => 103,
                'song_id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 121,
                'artist_id' => 104,
                'song_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 122,
                'artist_id' => 105,
                'song_id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 123,
                'artist_id' => 106,
                'song_id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 124,
                'artist_id' => 107,
                'song_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 125,
                'artist_id' => 108,
                'song_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 126,
                'artist_id' => 43,
                'song_id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 127,
                'artist_id' => 87,
                'song_id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 128,
                'artist_id' => 76,
                'song_id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 129,
                'artist_id' => 109,
                'song_id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'artist_id' => 57,
                'song_id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'artist_id' => 35,
                'song_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'artist_id' => 110,
                'song_id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'artist_id' => 111,
                'song_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'artist_id' => 41,
                'song_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'artist_id' => 47,
                'song_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'artist_id' => 3,
                'song_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'artist_id' => 112,
                'song_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'artist_id' => 61,
                'song_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'artist_id' => 113,
                'song_id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'artist_id' => 114,
                'song_id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'artist_id' => 116,
                'song_id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'artist_id' => 117,
                'song_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'artist_id' => 118,
                'song_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'artist_id' => 119,
                'song_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'artist_id' => 92,
                'song_id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}