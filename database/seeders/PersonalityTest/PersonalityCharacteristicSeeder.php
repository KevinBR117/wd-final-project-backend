<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalityCharacteristic;
use Illuminate\Database\Seeder;

class PersonalityCharacteristicSeeder extends Seeder
{
    public function run()
    {
        PersonalityCharacteristic::insert([
            ['personalityId' => '1','characteristic' => 'Emprendedor y entusisata'],
            ['personalityId' => '1','characteristic' => 'Actúa y luego piensa'],
            ['personalityId' => '1','characteristic' => 'Piensa en voz alta'],
            ['personalityId' => '1','characteristic' => 'Tiene mucha enería'],
            ['personalityId' => '1','characteristic' => 'Prefiere hacer varias cosas ala vez'],
            ['personalityId' => '1','characteristic' => 'Habla más que escucha'],
            ['personalityId' => '1','characteristic' => 'Es fácil de conocer'],
            ['personalityId' => '1','characteristic' => 'Puede distraerse con facilidad'],
            ['personalityId' => '1','characteristic' => 'Le gusta rodearse de gente'],

            ['personalityId' => '2','characteristic' => 'Reservado'],
            ['personalityId' => '2','characteristic' => 'Piensa y luego actúa'],
            ['personalityId' => '2','characteristic' => 'Piensa en voz baja'],
            ['personalityId' => '2','characteristic' => 'Energía tranquila'],
            ['personalityId' => '2','characteristic' => 'Prefiere concentrarse en un cosa'],
            ['personalityId' => '2','characteristic' => 'Escucha más qiue habla'],
            ['personalityId' => '2','characteristic' => 'Lleva una vida muy privada'],
            ['personalityId' => '2','characteristic' => 'Gran capacidad de concentración'],
            ['personalityId' => '2','characteristic' => 'Se siente agusto a solas'],

            ['personalityId' => '3','characteristic' => 'Confía en la experiencia propia'],
            ['personalityId' => '3','characteristic' => 'Realista, ve lo que es'],
            ['personalityId' => '3','characteristic' => 'Utiliza destrezas ya aprendidas'],
            ['personalityId' => '3','characteristic' => 'Prefiere instrucciones detalladas'],
            ['personalityId' => '3','characteristic' => 'Ve detalles y recuerda hechos'],
            ['personalityId' => '3','characteristic' => 'Admira soluciones prácticas'],
            ['personalityId' => '3','characteristic' => 'Se concentra en hechos específicos'],
            ['personalityId' => '3','characteristic' => 'Trabaja a un ritmo uniforme'],
            ['personalityId' => '3','characteristic' => 'Vive en el aquí y el ahora'],

            ['personalityId' => '4','characteristic' => 'Confía en sus instintos'],
            ['personalityId' => '4','characteristic' => 'Imaginativo, ve lo que podría ser'],
            ['personalityId' => '4','characteristic' => 'Prefiere desarrollar nuevas destrezas'],
            ['personalityId' => '4','characteristic' => 'Gusta descubrir las cosas por sí mismo'],
            ['personalityId' => '4','characteristic' => 'Percibe culaquier cosa nueva o diferente'],
            ['personalityId' => '4','characteristic' => 'Admira ideas creativas'],
            ['personalityId' => '4','characteristic' => 'Tiene ideas y visión de conjunto'],
            ['personalityId' => '4','characteristic' => 'Trabaja en ráfagas de energía'],
            ['personalityId' => '4','characteristic' => 'Piensa en las implicaciones futuras'],

            ['personalityId' => '5','characteristic' => 'Tiende a ver defectos ajenos'],
            ['personalityId' => '5','characteristic' => 'Se convence con la lógica'],
            ['personalityId' => '5','characteristic' => 'Aparenta ser frío y reservado'],
            ['personalityId' => '5','characteristic' => 'Toma decisiones objetivamente'],
            ['personalityId' => '5','characteristic' => 'No toma las cosas personalmente'],
            ['personalityId' => '5','characteristic' => 'Es motivado por las metas'],
            ['personalityId' => '5','characteristic' => 'Honesto y directo'],
            ['personalityId' => '5','characteristic' => 'Valora la honestidad y justicia'],
            ['personalityId' => '5','characteristic' => 'Argumenta o debate por diversión'],

            ['personalityId' => '6','characteristic' => 'Tiende a ver cualidades ajenas'],
            ['personalityId' => '6','characteristic' => 'Se convence por sus sensaciones'],
            ['personalityId' => '6','characteristic' => 'Aparenta ser cálido y amistoso'],
            ['personalityId' => '6','characteristic' => 'Decide por sus valores y sensaciones'],
            ['personalityId' => '6','characteristic' => 'Toma muchas cosas personalmente'],
            ['personalityId' => '6','characteristic' => 'Es motivado por el reconocimiento'],
            ['personalityId' => '6','characteristic' => 'Diplomático y con mucho tacto'],
            ['personalityId' => '6','characteristic' => 'Valora la armonía y la compasión'],
            ['personalityId' => '6','characteristic' => 'Evita discusiones y conflictos'],

            ['personalityId' => '7','characteristic' => 'Trabajar primero, jugar después'],
            ['personalityId' => '7','characteristic' => 'Prefiere terminar proyectos'],
            ['personalityId' => '7','characteristic' => 'Se siente agusto llevando sus agendas'],
            ['personalityId' => '7','characteristic' => 'Le gusta tomar decisiones'],
            ['personalityId' => '7','characteristic' => 'Prestar atención al tiempo, puntualidad'],
            ['personalityId' => '7','characteristic' => 'Le gusta hacer y atenerse a planes'],
            ['personalityId' => '7','characteristic' => 'Quiere que las cosas se decidan'],
            ['personalityId' => '7','characteristic' => 'Serio y convencional'],
            ['personalityId' => '7','characteristic' => 'Justifica la mayoría de las reglas'],

            ['personalityId' => '8','characteristic' => 'Jugar primero, trabajar después'],
            ['personalityId' => '8','characteristic' => 'Prefiere empezar proyectos'],
            ['personalityId' => '8','characteristic' => 'Desea la libertad de la espontaneidad'],
            ['personalityId' => '8','characteristic' => 'Pospone algunas decisiones, si puede'],
            ['personalityId' => '8','characteristic' => 'Menos conciente del tiempo, impuntual'],
            ['personalityId' => '8','characteristic' => 'Le gusta la flexibilidad en los planes'],
            ['personalityId' => '8','characteristic' => 'Quiere tener opciones abiertas'],
            ['personalityId' => '8','characteristic' => 'Relajado y poco convencional'],
            ['personalityId' => '8','characteristic' => 'Cuestiona muchas reglas']
        ]);
    }
}
