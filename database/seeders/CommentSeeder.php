<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            'nombre' => 'foo',
            'apellido' => 'bar',
            'correo' => 'foo@mail.com',
            'comentario' => 'comentario'
        ]);
    }
}
