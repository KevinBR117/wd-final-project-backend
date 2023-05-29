<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalityDangers;
use Illuminate\Database\Seeder;

class PersonalityDangersSeeder extends Seeder
{
    public function run()
    {
        PersonalityDangers::insert([
            ['id' => '1', 'acronymId' => '1', 'danger' => 'Pueden ser algo pesimistas acerca del futuro.'],
            ['id' => '2', 'acronymId' => '1', 'danger' => 'Pueden ser considerados insuficientemente sólidos cuando someten sus
             puntos de vista a otros.'],
            ['id' => '3', 'acronymId' => '1', 'danger' => 'Pueden ser subvalorados por su estilo tranquilo y algo retraído.'],
            ['id' => '4', 'acronymId' => '1', 'danger' => 'Pueden no ser tan flexibles como la situación u otros requieran.'],

            ['id' => '5', 'acronymId' => '2', 'danger' => 'Pueden ser demasiado confiados y crédulos.'],
            ['id' => '6', 'acronymId' => '2', 'danger' => 'Pueden no criticar a otros cuando es necesario.'],
            ['id' => '7', 'acronymId' => '2', 'danger' => 'Pueden ser heridos con facilidad y hasta retirarse.'],
            ['id' => '8', 'acronymId' => '2', 'danger' => 'Pueden sentir un contraste tal entre sus elevados ideales internos
             y sus realizaciones reales, que asuman un cierto sentido de inadecuación, aún cuando estén siendo tan efectivos
             como los demás.'],

            ['id' => '9', 'acronymId' => '3', 'danger' => 'Pueden tener problemas si esperan que todo el mundo sea tan lógico y analítico como ellos.'],
            ['id' => '10', 'acronymId' => '3', 'danger' => 'Pueden ignorar las implicaciones de largo alcance por priorizar operaciones de carácter cotidiano.'],
            ['id' => '12', 'acronymId' => '3', 'danger' => 'Pueden descuidar las relaciones interpersonales.'],
            ['id' => '11', 'acronymId' => '3', 'danger' => 'Pueden tornarse rígidos en su comportamiento y ser considerados inflexibles.'],

            ['id' => '13', 'acronymId' => '4', 'danger' => 'Pueden guardarse cosas importantes para sí y parecer no estar preocupados.'],
            ['id' => '14', 'acronymId' => '4', 'danger' => 'Pueden seguir adelante con el trabajo, antes de esperar que el esfuerzo previo rinda los
             frutos necesarios.'],
            ['id' => '15', 'acronymId' => '4', 'danger' => 'Pueden parecer indecisos y no rígidos.'],

            ['id' => '16', 'acronymId' => '5', 'danger' => 'Pueden creer, aunque no sea realidad, que sus ideas son pasadas por alto y/o subestimadas.'],
            ['id' => '17', 'acronymId' => '5', 'danger' => 'Pueden no ser francos y directos con la crítica.'],
            ['id' => '18', 'acronymId' => '5', 'danger' => 'Pueden ser reacios a inmiscuirse en la vida de otros y, por lo tanto, mantenerse demasiado para si.'],
            ['id' => '19', 'acronymId' => '5', 'danger' => 'Pueden operar con concentración en un solo asunto, ignorando otras tareas que necesitan ser realizadas.'],

            ['id' => '20', 'acronymId' => '6', 'danger' => 'Pueden demorar la terminación de tareas debido al perfeccionismo.'],
            ['id' => '21', 'acronymId' => '6', 'danger' => 'Pueden tratar de agradar a demasiada gente al mismo tiempo.'],
            ['id' => '22', 'acronymId' => '6', 'danger' => 'Pueden dedicar más tiempo a la reflexión que a la acción.'],

            ['id' => '23', 'acronymId' => '7', 'danger' => 'Pueden parecer tan inflexibles que otros teman acercárseles o discrepar.'],
            ['id' => '24', 'acronymId' => '7', 'danger' => 'Pueden tener dificultades en deshacerse de ideas impracticables.'],
            ['id' => '25', 'acronymId' => '7', 'danger' => 'Pueden ignorar el impacto de sus ideas o estilo sobre otros.'],

            ['id' => '26', 'acronymId' => '8', 'danger' => 'Pueden ser demasiado abstractos y, por tanto, no muy realistas en cuanto al seguimiento necesario.'],
            ['id' => '27', 'acronymId' => '8', 'danger' => 'Pueden resultar demasiado teóricos en sus explicaciones.'],
            ['id' => '28', 'acronymId' => '8', 'danger' => 'Pueden concentrarse demasiado en inconsistencias menores sin tomar en cuenta el trabajo en equipo
            y la armonía.'],

            ['id' => '29', 'acronymId' => '9', 'danger' => 'Pueden ocultar algún problema para evitar un conflicto.'],
            ['id' => '30', 'acronymId' => '9', 'danger' => 'Pueden no valorar suficientemente sus propias prioridades debido a su deseo de agradar a los demás.'],
            ['id' => '31', 'acronymId' => '9', 'danger' => 'Pueden no siempre detenerse y ver el cuadro completo.'],
            ['id' => '32', 'acronymId' => '9', 'danger' => 'Pueden asumir, sin suficientes elementos, lo que es mejor para otros o para la organización.'],

            ['id' => '33', 'acronymId' => '10', 'danger' => 'Pueden sobre-enfatizar información no objetiva.'],
            ['id' => '34', 'acronymId' => '10', 'danger' => 'Pueden no reflexionar antes de "lanzarse".'],
            ['id' => '35', 'acronymId' => '10', 'danger' => 'Pueden invertir demasiado tiempo a ser sociables y descuidar alguna tarea.'],
            ['id' => '36', 'acronymId' => '10', 'danger' => 'Puede que no terminen siempre lo que empiezan.'],

            ['id' => '37', 'acronymId' => '11', 'danger' => 'Pueden ser sorprendidos por sus sentimientos y valores si los ignora durante mucho tiempo.'],
            ['id' => '38', 'acronymId' => '11', 'danger' => 'Pueden decidir demasiado rápido.'],
            ['id' => '39', 'acronymId' => '11', 'danger' => 'Pueden no ver la necesidad de cambio.'],
            ['id' => '40', 'acronymId' => '11', 'danger' => 'Pueden pasar por alto las sutilezas al tratar de que se haga el trabajo.'],

            ['id' => '41', 'acronymId' => '12', 'danger' => 'Pueden parecer bruscos, e incluso insensibles, cuando actúan rápidamente.'],
            ['id' => '42', 'acronymId' => '12', 'danger' => 'Pueden descansar demasiado en la improvisación y perder la vista las implicaciones más amplias de
            sus acciones'],
            ['id' => '43', 'acronymId' => '12', 'danger' => 'Pueden sacrificar el seguimiento de cualquier situación ante el siguiente problema inmediato.'],

            ['id' => '44', 'acronymId' => '13', 'danger' => 'Pueden idealizar a otros y sufrir de "lealtad ciega".'],
            ['id' => '45', 'acronymId' => '13', 'danger' => 'Pueden "barrer los problemas debajo de la alfombra" cuando están en conflicto.'],
            ['id' => '46', 'acronymId' => '13', 'danger' => 'Pueden no priorizar las tareas a favor de cuestiones de relaciones humanas.'],
            ['id' => '47', 'acronymId' => '13', 'danger' => 'Pueden interpretar la crítica de forma personal.'],

            ['id' => '48', 'acronymId' => '14', 'danger' => 'Pueden pasar a nuevas ideas y proyectos sin completar los ya iniciados.'],
            ['id' => '49', 'acronymId' => '14', 'danger' => 'Pueden pasar por alto detalles importantes.'],
            ['id' => '50', 'acronymId' => '14', 'danger' => 'Pueden tratar de abarcar demasiado.'],
            ['id' => '51', 'acronymId' => '14', 'danger' => 'Pueden demorarse.'],

            ['id' => '52', 'acronymId' => '15', 'danger' => 'Pueden ignorar las necesidades de la gente al enfocar la tarea.'],
            ['id' => '53', 'acronymId' => '15', 'danger' => 'Pueden ignorar las consideraciones y limitantes prácticas.'],
            ['id' => '54', 'acronymId' => '15', 'danger' => 'Pueden decidir demasiado rápido y aparecer impacientes y prepotentes.'],
            ['id' => '55', 'acronymId' => '15', 'danger' => 'Pueden ignorar y reprimir sus propios sentimientos.'],

            ['id' => '56', 'acronymId' => '16', 'danger' => 'Pueden "perderse" en el modelo, olvidando las realidades presentes.'],
            ['id' => '57', 'acronymId' => '16', 'danger' => 'Pueden ser competitivos y no apreciar la contribución de otros.'],
            ['id' => '58', 'acronymId' => '16', 'danger' => 'Pueden sobre-extenderse.'],
            ['id' => '59', 'acronymId' => '16', 'danger' => 'Pueden no adaptarse bien a los procedimientos establecidos.'],
        ]);
    }
}
