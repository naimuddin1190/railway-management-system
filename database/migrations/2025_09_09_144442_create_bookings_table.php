<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('pnr')->unique(); // Ticket number
        $table->foreignId('schedule_id')->constrained('train_schedules')->onDelete('cascade');
        $table->string('name');
        $table->string('phone');
        $table->string('class');
        $table->integer('passengers');
        $table->string('status')->default('confirmed');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
