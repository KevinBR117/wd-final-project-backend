<?php

namespace Database\Seeders\VarkTest;

use App\Models\VarkTest\VarkQuestions;
use Illuminate\Database\Seeder;

class VarkQuestionsSeeder extends Seeder
{
    public function run()
    {
        VarkQuestions::insert([
            ['question' => 'Usted cocinará algo especial para su familia. Usted haría:'],
            ['question' => 'Usted escogerá alimento en un restaurante o un café. Usted haría:'],
            ['question' => 'Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción:'],
            ['question' => 'Usted ha terminado una competencia o un examen le gustaría tener alguna retroalimentación. Te gustaría retroalimentarte:'],
            ['question' => 'Usted tiene un problema con la rodilla. Usted preferiría que el doctor:'],
            ['question' => 'Usted está a punto de comprar una cámara digital o teléfono o móvil. ¿Aparte del precio qué más influirá en tomar tu decisión?:'],
            ['question' => 'Usted no está seguro de como se deletrea trascendente o tracendente ¿Ud. qué haría?:'],
            ['question' => 'Me gustan páginas de Internet que tienen:'],
            ['question' => 'Usted está planeando unas vacaciones para un grupo. Usted quiere alguna observación de ellos acerca del plan. Usted qué haría:'],
            ['question' => 'Usted está usando un libro, disco compacto o página de Internet para aprender a tomar fotos con su cámara digital nueva. Usted le gustaría tener:'],
            ['question' => 'Usted quiere aprender un programa nuevo, habilidad o juego en una computadora. Usted qué hace:'],
            ['question' => 'Está ayudando a alguien que quiere ir al aeropuerto, al centro del pueblo o la estación del ferrocarril. Usted hace:'],
            ['question' => 'Recuerde un momento en su vida en que Ud. aprendió a hacer algo nuevo. Trate de evitar escoger una destreza física, como andar en bicicleta. Ud. aprendió mejor:'],
            ['question' => 'Ud. Prefiere un maestro o conferencia que use:'],
            ['question' => 'Un grupo de turistas quiere aprender acerca de parques o reservas naturales en su área. Usted:'],
            ['question' => 'Usted tiene que hacer un discurso para una conferencia u ocasión especial. Usted hace:']
        ]);
    }
}
