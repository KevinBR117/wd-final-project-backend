<?php

namespace Database\Seeders;

use Database\Seeders\VarkTest\VarkQuestionsSeeder;
use Database\Seeders\VarkTest\VarkAnswersSeeder;

use Database\Seeders\PersonalityTest\PersonalityPersonalitiesSeeder;
use Database\Seeders\PersonalityTest\PersonalityCharacteristicSeeder;
use Database\Seeders\PersonalityTest\PersonalityMainTypesSeeder;
use Database\Seeders\PersonalityTest\PersonalityMainCharacteristicsSeeder;
use Database\Seeders\PersonalityTest\PersonalityDangersSeeder;
use Database\Seeders\PersonalityTest\PersonalitySuggestionsSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(VarkQuestionsSeeder::class);
        $this->call(VarkAnswersSeeder::class);

        $this->call(PersonalityPersonalitiesSeeder::class);
        $this->call(PersonalityCharacteristicSeeder::class);
        $this->call(PersonalityMainTypesSeeder::class);
        $this->call(PersonalityMainCharacteristicsSeeder::class);
        $this->call(PersonalityDangersSeeder::class);
        $this->call(PersonalitySuggestionsSeeder::class);

        $this->call(AdminSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
