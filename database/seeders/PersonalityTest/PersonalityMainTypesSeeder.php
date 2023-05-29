<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalityMainTypes;
use Illuminate\Database\Seeder;

class PersonalityMainTypesSeeder extends Seeder
{
    public function run()
    {
        PersonalityMainTypes::insert([
           ['id' => '1', 'mainType' => 'Técnico Analítico'],
           ['id' => '2', 'mainType' => 'Controlador'],
           ['id' => '3', 'mainType' => 'Apoyo'],
           ['id' => '4', 'mainType' => 'Social'],
        ]);
    }
}
