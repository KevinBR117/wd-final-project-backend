<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('personality_main_types', function (Blueprint $table) {
            $table->id();
            $table->string('mainType', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('personality_main_types');
    }
};
