<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::insert([
            'email' => 'admin@admin.com',
            'name' => 'John Doe',
            'password' => 'admin'
        ]);
    }
}
