<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vark_user_result', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50);
            $table->integer('visualPunctuation');
            $table->integer('auralPunctuation');
            $table->integer('readPunctuation');
            $table->integer('kinestheticPunctuation');
            $table->string('varkTypeObtained');
           $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vark_user_result');
    }
};
