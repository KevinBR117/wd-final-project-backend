<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('personality_main_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mainTypeId');
            $table->string('mainCharacteristic', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('personality_main_characteristics');
    }
};
