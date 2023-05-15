<?php

namespace Database\Seeders;

use App\Models\PersonalityTest\Personality;
use Illuminate\Database\Seeder;

class PersonalitySeeder extends Seeder
{
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
