<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::insert([
            'pregunta' => 'Usted cocinará algo especial para su familia. Usted haría:'
        ]);
        Pregunta::insert([
            'pregunta' => 'Usted escogerá alimento en un restaurante o café. Usted haría:'
        ]);
        Pregunta::insert([
            'pregunta' => 'Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción'
        ]);
    }
}
