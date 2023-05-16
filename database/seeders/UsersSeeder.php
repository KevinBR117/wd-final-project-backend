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
                'email' => 'alanmenchaca@mgail.com',
                'name' => 'Alan',
                'lastName' => 'Menchaca',
                // 'password' => 'foo@bar'
            ],
            [
                'email' => 'kevinbarboza@gmail.com',
                'name' => 'Kevin',
                'lastName' => 'Barboza',
                // 'password' => 'foo@bar'
            ],
            [
                'email' => 'victordeleon@mail.com',
                'name' => 'Victor',
                'lastName' => 'de Leon',
                // 'password' => 'foo@bar'
            ]
        ]);
    }
}
