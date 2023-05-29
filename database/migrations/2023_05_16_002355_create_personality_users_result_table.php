<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personality_users_result', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50);
            $table->integer('extrovertScore');
            $table->integer('introvertScore');
            $table->integer('sensoryScore');
            $table->integer('intuitiveScore');
            $table->integer('rationalScore');
            $table->integer('emotionalScore');
            $table->integer('qualifierScore');
            $table->integer('perceptualScore');
            $table->string('personalityTypeObtained', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personality_users_result');
    }
};
