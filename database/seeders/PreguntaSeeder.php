<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    public function run()
    {
        $preguntas = [
            ['pregunta' => 'Usted cocinará algo especial para su familia. Usted haría:'],
            ['pregunta' => 'Usted escogerá alimento en un restaurante o un café. Usted haría:'],
            ['pregunta' => 'Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción:'],
            ['pregunta' => 'Usted ha terminado una competencia o un examen le gustaría tener alguna retroalimentación. Te gustaría retroalimentarte:'],
            ['pregunta' => 'Usted tiene un problema con la rodilla. Usted preferiría que el doctor:'],
            ['pregunta' => 'Usted está a punto de comprar una cámara digital o teléfono o móvil. ¿Aparte del precio qué más influirá en tomar tu decisión?:'],
            ['pregunta' => 'Usted no está seguro de como se deletrea trascendente o tracendente ¿Ud. qué haría?:'],
            ['pregunta' => 'Me gustan páginas de Internet que tienen:'],
            ['pregunta' => 'Usted está planeando unas vacaciones para un grupo. Usted quiere alguna observación de ellos acerca del plan. Usted qué haría:'],
            ['pregunta' => 'Usted está usando un libro, disco compacto o página de Internet para aprender a tomar fotos con su cámara digital nueva. Usted le gustaría tener:'],
            ['pregunta' => 'Usted quiere aprender un programa nuevo, habilidad o juego en una computadora. Usted qué hace:'],
            ['pregunta' => 'Está ayudando a alguien que quiere ir al aeropuerto, al centro del pueblo o la estación del ferrocarril. Usted hace:'],
            ['pregunta' => 'Recuerde un momento en su vida en que Ud. aprendió a hacer algo nuevo. Trate de evitar escoger una destreza física, como andar en bicicleta. Ud. aprendió mejor:'],
            ['pregunta' => 'Ud. Prefiere un maestro o conferencia que use:'],
            ['pregunta' => 'Un grupo de turistas quiere aprender acerca de parques o reservas naturales en su área. Usted:'],
            ['pregunta' => 'Usted tiene que hacer un discurso para una conferencia u ocasión especial. Usted hace:']
        ];

        Pregunta::insert($preguntas);
    }
}
