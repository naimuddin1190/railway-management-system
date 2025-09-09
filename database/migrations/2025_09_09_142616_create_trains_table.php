<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number')->nullable();
            $table->string('source');
            $table->string('destination');
            $table->integer('distance')->default(0); // km
            $table->json('class_rates')->nullable(); // {"AC": 5.0, "Sleeper":3.0, "General":1.0}
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
