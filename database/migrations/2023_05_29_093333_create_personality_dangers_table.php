<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('personality_dangers', function (Blueprint $table) {
            $table->id();
            $table->string('acronymId', 8);
            $table->string('danger', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('personality_dangers');
    }
};
