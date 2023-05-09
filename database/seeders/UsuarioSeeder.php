<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
            'correo' => 'alanmenchaca@mail.com',
            'nombre' => 'alan',
            'apellido' => 'menchaca'
        ]);
        Usuario::insert([
            'correo' => 'kevinbarboza@mail.com',
            'nombre' => 'kevin',
            'apellido' => 'barboza'
        ]);
        Usuario::insert([
            'correo' => 'victordeleon@mail.com',
            'nombre' => 'victor',
            'apellido' => 'de Leon'
        ]);
    }
}
