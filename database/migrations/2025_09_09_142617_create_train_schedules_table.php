<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('train_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id')->constrained()->onDelete('cascade');
            $table->date('run_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('seats_ac')->default(0);
            $table->integer('seats_sleeper')->default(0);
            $table->integer('seats_general')->default(0);
            $table->timestamps();

            $table->unique(['train_id','run_date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('train_schedules');
    }
};
