<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert([
            ['name'=> 'Debutant'] ,
            ['name'=> 'Avancee'] ,
            ['name'=> 'Intermédiaire'] ,
        ]);
    }
}
