<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('dummy');
            $table->json('structure');
            $table->string('type'); /// amaze jer ar vici ra sheiudzleba
            $table->tinyInteger('managed'); // es iqneba avtomaturia tu ara. sheidfzleba ar eyos da mere custom gavides
            $table->string('template'); // aq sheidzeba rame mza template itvirtebodes rogorica product an new an rame egeti
            $table->tinyInteger('active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modules');
    }
};
