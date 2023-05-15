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
            'email' => 'admin@admin.com',
            'name' => 'John',
            'lastName' => 'Doe',
            'password' => 'admin'
        ]);
    }
}
