<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->string('email', 50);
            $table->string('name', 50);
            $table->string('password', 50);
            $table->primary('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
