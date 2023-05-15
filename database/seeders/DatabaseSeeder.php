<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(VarkQuestionsSeeder::class);
        $this->call(VarkAnswersSeeder::class);

        $this->call(PersonalitySeeder::class);
        $this->call(CharacteristicSeeder::class);

        $this->call(AdminSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
