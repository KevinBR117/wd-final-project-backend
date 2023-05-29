<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('personality_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personalityId');
            $table->string('characteristic', 255);
            // $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personality_characteristics');
    }
};
