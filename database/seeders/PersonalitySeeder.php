<?php

namespace Database\Seeders;

use App\Models\Personality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personality::insert([
            ['personality' => 'Extrovertido'],
            ['personality' => 'Introvertido'],
            ['personality' => 'Sensorial'],
            ['personality' => 'Intuitivo'],
            ['personality' => 'Racional'],
            ['personality' => 'Emocional'],
            ['personality' => 'Calificador'],
            ['personality' => 'Perceptivo']
        ]);
    }
}
