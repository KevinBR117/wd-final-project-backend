<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        $this->call(PreguntaSeeder::class);
        $this->call(RespuestaSeeder::class);
        $this->call(PersonalitySeeder::class);
        $this->call(CharacteristicSeeder::class);
=======
        $this->call(VarkQuestionsSeeder::class);
        $this->call(VarkAnswersSeeder::class);

>>>>>>> 2ac8870 (improve all the backend controllers, seeders, etc.)
        $this->call(AdminSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
