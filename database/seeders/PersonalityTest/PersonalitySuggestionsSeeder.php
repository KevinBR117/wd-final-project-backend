<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalitySuggestions;
use Illuminate\Database\Seeder;

class PersonalitySuggestionsSeeder extends Seeder
{
    public function run()
    {
        PersonalitySuggestions::insert([
            ['id' => '1', 'acronymId' => '1', 'suggestion' => 'Deben aprender a divulgar y llamar más la atención hacia sus propios logros.'],
            ['id' => '2', 'acronymId' => '1', 'suggestion' => 'Deben tratar de evitar cierta suspicacia hacia su propia intuición o imaginación y
            tomarlas más en serio.'],

            ['id' => '3', 'acronymId' => '2', 'suggestion' => 'Deben desarrollar más escepticismo y un método para analizar la información en lugar de
            simplemente aceptarla como buena.'],
            ['id' => '4', 'acronymId' => '2', 'suggestion' => 'Deben elevar más el aprecio a sus propios logros.'],

            ['id' => '5', 'acronymId' => '3', 'suggestion' => 'Deben prestar atención también a las más amplias ramificaciones de problemas, además
             de a las realidades presentes.'],
            ['id' => '6', 'acronymId' => '3', 'suggestion' => 'Deben probar alternativas frescas para evitar lo tradicionalmente utilizado.'],

            ['id' => '7', 'acronymId' => '4', 'suggestion' => 'Pueden necesitar abrirse y compartir preocupaciones e información con otras personas.'],
            ['id' => '8', 'acronymId' => '4', 'suggestion' => 'Pueden necesitar desarrollar perseverancia..'],
            ['id' => '9', 'acronymId' => '4', 'suggestion' => 'Pueden necesitar planificar y dedicar el esfuerzo necesario para lograr los resultados
            deseados.'],
            ['id' => '10', 'acronymId' => '4', 'suggestion' => 'Pueden necesitar desarrollar el hábito de fijarse en metas.'],

            ['id' => '11', 'acronymId' => '5', 'suggestion' => 'Pueden necesitar desarrollar habilidades políticas e impositivas para luchas por sus
            ideales.'],
            ['id' => '12', 'acronymId' => '5', 'suggestion' => 'Pueden necesitar aprender a dar retroalimentación constructiva a otros oportunamente.'],
            ['id' => '13', 'acronymId' => '5', 'suggestion' => 'Pueden necesitar encontrar otras alternativas que pueden ser logradas también.'],

            ['id' => '14', 'acronymId' => '6', 'suggestion' => 'Deben desarrollar más dureza y disposición a decir "no".'],
            ['id' => '15', 'acronymId' => '6', 'suggestion' => 'Deben desarrollar la capacidad para trabajar con la realidad más que buscar la
            respuesta perfecta.'],

            ['id' => '16', 'acronymId' => '7', 'suggestion' => 'Deben esforzarse por oír las ideas de otros.'],
            ['id' => '17', 'acronymId' => '7', 'suggestion' => 'Deben esforzarse por detectar las situaciones que puedan entrar en conflicto con el
            objetivo que persiguen.'],

            ['id' => '18', 'acronymId' => '8', 'suggestion' => 'Deben concentrarse en detalles prácticos y desarrollar el seguimiento, así como hacer
            esfuerzos para expresar las cosas de manera más simple.'],
            ['id' => '19', 'acronymId' => '8', 'suggestion' => 'Deben esforzarse por conocer los aspectos personales y profesionales de los integrates
            restantes del grupo.'],

            ['id' => '20', 'acronymId' => '9', 'suggestion' => 'Deben incluir sus propias necesidades.'],
            ['id' => '21', 'acronymId' => '9', 'suggestion' => 'Deben escuchar bien lo que los otros realmente necesitan o quieren.'],

            ['id' => '22', 'acronymId' => '10', 'suggestion' => 'Pueden necesitar incluir implicaciones lógicas en su toma de decisiones.'],
            ['id' => '23', 'acronymId' => '10', 'suggestion' => 'Pueden necesitar planificar previamente cuando administran proyectos.'],
            ['id' => '24', 'acronymId' => '10', 'suggestion' => 'Pueden necesitar balancear el esfuerzo por las tareas con el trato social.'],
            ['id' => '25', 'acronymId' => '10', 'suggestion' => 'Pueden necesitar trabajar en una mejor administración del tiempo.'],

            ['id' => '26', 'acronymId' => '11', 'suggestion' => 'Deben considerar todos los aspectos, incluyendo el elemento humano, antes de decidir.'],
            ['id' => '27', 'acronymId' => '11', 'suggestion' => 'Deben esforzarse para ver los beneficios del cambio.'],

            ['id' => '28', 'acronymId' => '12', 'suggestion' => 'Deben dominar su excesiva confianza e incluir los sentimientos de otras personas en
            sus análisis.'],
            ['id' => '29', 'acronymId' => '12', 'suggestion' => 'Deben tratar de ver más allá de lo inmediato y planificar con antelación.'],
            ['id' => '30', 'acronymId' => '12', 'suggestion' => 'Deben desarrollar más su perseverancia.'],

            ['id' => '31', 'acronymId' => '13', 'suggestion' => 'Deben hacer un esfuerzo especial para admitir las limitaciones de la gente que quiere.'],
            ['id' => '32', 'acronymId' => '13', 'suggestion' => 'Pueden necesitar aprender a manejar los conflictos en forma productiva.'],
            ['id' => '33', 'acronymId' => '13', 'suggestion' => 'Pueden requerir prestar igual atención a los detalles de la tarea tanto como a los de la gente.'],
            ['id' => '34', 'acronymId' => '13', 'suggestion' => 'Pueden necesitar detener el análisis autocrítico subjetivo y escuchar cuidadosamente la información
             objetiva contenido en la retroalimentación.'],

            ['id' => '35', 'acronymId' => '14', 'suggestion' => 'Deben fijar prioridades y dar seguimiento completo a los asuntos.'],
            ['id' => '36', 'acronymId' => '14', 'suggestion' => 'Deben buscar detalles importantes.'],
            ['id' => '37', 'acronymId' => '14', 'suggestion' => 'Deben seleccionar proyectos en lugar de tratar de hacer todo lo que sea inicialmente atractivo.'],

            ['id' => '38', 'acronymId' => '15', 'suggestion' => 'Deben esforzarse por incluir el elemento humano y apreciar las contribuciones de otros.'],
            ['id' => '39', 'acronymId' => '15', 'suggestion' => 'Deben chequear los recursos prácticos, personales y situaciones disponibles, antes de seguir adelante.'],

            ['id' => '40', 'acronymId' => '16', 'suggestion' => 'Deben prestar atención a la realidad presente.'],
            ['id' => '41', 'acronymId' => '16', 'suggestion' => 'Deben esforzarse por reconocer y validar la contribución de otros.'],
        ]);
    }
}
