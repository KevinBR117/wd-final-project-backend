<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        Users::insert([
            [
                'email' => 'alanmenchaca@mail.com',
                'name' => 'Alan Menchaca',
            ],
            [
                'email' => 'kevinbarboza@mail.com',
                'name' => 'Kevin Barboza',
            ],
            [
                'email' => 'victordeleon@mail.com',
                'name' => 'Victor de Leon',
            ]
        ]);
    }
}
