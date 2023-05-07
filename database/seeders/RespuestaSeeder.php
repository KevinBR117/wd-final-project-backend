<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuesta::insert([
            'preguntaId' => 1,
            'respuesta' => 'Preguntar a amigos por sugerencias'
        ]);
        Respuesta::insert([
            'preguntaId' => 1,
            'respuesta' => 'Dar una vista al recetario por ideas de las fotos'
        ]);
        Respuesta::insert([
            'preguntaId' => 1,
            'respuesta' => 'Usar un libro de cocina donde usted sabe que hay una buena receta'
        ]);
        Respuesta::insert([
            'preguntaId' => 1,
            'respuesta' => 'Cocinar algo que usted sabe sin la necesidad de instrucciones'
        ]);
        
        Respuesta::insert([
            'preguntaId' => 2,
            'respuesta' => 'Escuchar al mesero o pedir que amigos recomienden opciones'
        ]);
        Respuesta::insert([
            'preguntaId' => 2,
            'respuesta' => 'Mirar lo que otros comen o mirar dibujos de cada platillo'
        ]);
        Respuesta::insert([
            'preguntaId' => 2,
            'respuesta' => 'Escoger de las descripciones en el menú'
        ]);
        Respuesta::insert([
            'preguntaId' => 2,
            'respuesta' => 'Escoger algo de lo que tienes o has tenido antes'
        ]);
        
        Respuesta::insert([
            'preguntaId' => 3,
            'respuesta' => 'Un amigo habla de él y te lo recomendaría'
        ]);
        Respuesta::insert([
            'preguntaId' => 3,
            'respuesta' => 'Tienes historias reales, experiencias y ejemplos'
        ]);
        Respuesta::insert([
            'preguntaId' => 3,
            'respuesta' => 'Leyendo rápidamente partes de él'
        ]);
        Respuesta::insert([
            'preguntaId' => 3,
            'respuesta' => 'El diseño de la pasta es atractivo'
        ]);
    }
}
