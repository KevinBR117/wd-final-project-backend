<?php

namespace Database\Seeders\PersonalityTest;

use App\Models\PersonalityTest\PersonalityMainCharacteristics;
use Illuminate\Database\Seeder;

class PersonalityMainCharacteristicsSeeder extends Seeder
{
    public function run()
    {
        PersonalityMainCharacteristics::insert([
            ['id' => '1', 'mainTypeId' => '1', 'mainCharacteristic' => 'Pensadores y analistas lógicos.'],
            ['id' => '2', 'mainTypeId' => '1', 'mainCharacteristic' => 'Interés por las realidades y los hechos concretos.'],
            ['id' => '3', 'mainTypeId' => '1', 'mainCharacteristic' => 'Capacidad para recibir, clasificar y ordenar información.'],
            ['id' => '4', 'mainTypeId' => '1', 'mainCharacteristic' => 'Respetuosos de Técnicas y Métodos.'],
            ['id' => '5', 'mainTypeId' => '1', 'mainCharacteristic' => 'No cambian fácilmente su lógica.'],
            ['id' => '6', 'mainTypeId' => '1', 'mainCharacteristic' => 'Tendencia al perfeccionismo.'],
            ['id' => '7', 'mainTypeId' => '1', 'mainCharacteristic' => 'Motivador Básico: El respeto.'],
            ['id' => '8', 'mainTypeId' => '1', 'mainCharacteristic' => 'Evitarle: El ridículo.'],

            ['id' => '9', 'mainTypeId' => '2', 'mainCharacteristic' => 'Trazan estrategias y controlan sistemas.'],
            ['id' => '10', 'mainTypeId' => '2', 'mainCharacteristic' => 'Necesita información.'],
            ['id' => '11', 'mainTypeId' => '2', 'mainCharacteristic' => 'Tratan de convencer.'],
            ['id' => '12', 'mainTypeId' => '2', 'mainCharacteristic' => 'Sugieren con frecuencia.'],
            ['id' => '13', 'mainTypeId' => '2', 'mainCharacteristic' => 'Motivador Básico: El poder.'],
            ['id' => '14', 'mainTypeId' => '2', 'mainCharacteristic' => 'Evitarles: Perder el tiempo.'],

            ['id' => '15', 'mainTypeId' => '3', 'mainCharacteristic' => 'Empáticos, sinceros.'],
            ['id' => '16', 'mainTypeId' => '3', 'mainCharacteristic' => 'Tratan que todos estén contentos.'],
            ['id' => '17', 'mainTypeId' => '3', 'mainCharacteristic' => 'Tienden a ser protectores.'],
            ['id' => '18', 'mainTypeId' => '3', 'mainCharacteristic' => 'Rechazan la desconfianza.'],
            ['id' => '19', 'mainTypeId' => '3', 'mainCharacteristic' => 'Aglutinan colectivos.'],
            ['id' => '20', 'mainTypeId' => '3', 'mainCharacteristic' => 'Generan armonía.'],
            ['id' => '21', 'mainTypeId' => '3', 'mainCharacteristic' => 'Mediadores naturales.'],
            ['id' => '22', 'mainTypeId' => '3', 'mainCharacteristic' => 'Motivador Básico: aprobación.'],
            ['id' => '23', 'mainTypeId' => '3', 'mainCharacteristic' => 'Evitarles: Perder una relación.'],

            ['id' => '24', 'mainTypeId' => '4', 'mainCharacteristic' => 'Joviales.'],
            ['id' => '25', 'mainTypeId' => '4', 'mainCharacteristic' => 'Logran fácilmente ser el centro.'],
            ['id' => '26', 'mainTypeId' => '4', 'mainCharacteristic' => 'Tienden al optimismo.'],
            ['id' => '27', 'mainTypeId' => '4', 'mainCharacteristic' => 'Facilidad para entablar relaciones.'],
            ['id' => '28', 'mainTypeId' => '4', 'mainCharacteristic' => 'Motivador Básico: Reconocimiento.'],
            ['id' => '29', 'mainTypeId' => '4', 'mainCharacteristic' => 'Evitarles: Perder su esfuerzo.'],
        ]);
    }
}
