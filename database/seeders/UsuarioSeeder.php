<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::insert([
            [
                'correo' => 'alanmenchaca@mail.com',
                'nombre' => 'alan',
                'apellido' => 'menchaca'
            ],
            [
                'correo' => 'kevinbarboza@mail.com',
                'nombre' => 'kevin',
                'apellido' => 'barboza'
            ],
            [
                'correo' => 'victordeleon@mail.com',
                'nombre' => 'victor',
                'apellido' => 'de Leon'
            ]
        ]);
    }
}
