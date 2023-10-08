<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AiringsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airings')->insert([
            [
                'title' => 'Tate no Yuusha no Nariagari 3rd Season',
                'episodes' => 12,
                'studios' => 'Kinema Citrus',
                'genres' => 'Action, Adventure, Drama, Fantasy',
                'synopsis' => 'Third season of Tate no Yuusha no Nariagari.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SPY X FAMILY Season 2',
                'episodes' => 12,
                'studios' => 'WitStudios, CloverWorks',
                'genres' => 'Action, Comedy',
                'synopsis' => 'Second season of Spy x Family.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Goblin Slayer 2nd Season',
                'episodes' => 12,
                'studios' => 'LIDENFILMS',
                'genres' => 'Action, Adventure, Fantasy',
                'synopsis' => 'Second season of Goblin Slayer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
