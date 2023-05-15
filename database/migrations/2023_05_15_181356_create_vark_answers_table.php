<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vark_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('questionId');
            $table->string('answer', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('vark_answers');
    }
};
