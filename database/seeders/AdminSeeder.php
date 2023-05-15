<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::insert([
            'correo' => 'admin@admin.com',
            'password' => 'admin',
            'nombre' => 'jhon',
            'apellido' => 'doe'
        ]);
    }
}
