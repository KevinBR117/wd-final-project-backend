<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PreguntaSeeder::class);
        $this->call(RespuestaSeeder::class);
        $this->call(PersonalitySeeder::class);
        $this->call(CharacteristicSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
