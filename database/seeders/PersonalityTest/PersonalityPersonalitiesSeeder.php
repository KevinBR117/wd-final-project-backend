<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalityPersonalities;
use Illuminate\Database\Seeder;

class PersonalityPersonalitiesSeeder extends Seeder
{
    public function run()
    {
        PersonalityPersonalities::insert([
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
