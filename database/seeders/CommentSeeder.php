<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    public function run()
    {
        Comment::insert([
            'name' => 'John',
            'lastName' => 'Doe',
            'email' => 'admin@admin.com',
            'comment' => 'comment'
        ]);
    }
}
